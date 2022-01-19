{ pkgs ? import <nixpkgs> { }, unstable ? import <nixos-unstable> { } }:

let
  php' = pkgs.php80.buildEnv {
    extraConfig = ''
      extension=${unstable.php80Extensions.mongodb}/lib/php/extensions/mongodb.so
      # memory_limit = 2048M
      [xdebug]
      zend_extension=${pkgs.php80Extensions.xdebug}/lib/php/extensions/xdebug.so
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
