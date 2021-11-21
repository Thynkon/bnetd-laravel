{ pkgs ? import <nixpkgs> {}, unstable ? import <nixos-unstable> {} }:

let
        php' = pkgs.php74.buildEnv {
            extraConfig = ''
            extension=${unstable.php74Extensions.mongodb}/lib/php/extensions/mongodb.so
            [xdebug]
            zend_extension=${pkgs.php74Extensions.xdebug}/lib/php/extensions/xdebug.so
                    xdebug.mode=debug
                    xdebug.client_host=127.0.0.1
                    xdebug.client_port=9003'';
        };
        mongodb = pkgs.mongodb;
in
        pkgs.mkShell {
                buildInputs = [
                        php'
                        php'.packages.composer
                        mongodb
                ];
                # does not work if mongo is not installed system-wise
                shellHook = ''
                systemctl start mongodb.service
                '';
}
