<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class Jail 
{
    public static function all(): Collection
    {
/*
        $jails = [];

        foreach (Storage::files('fail2ban') as $jail) {
            $jail_name = pathinfo($jail, PATHINFO_FILENAME);
            $contents = Storage::path($jail);

            $jails[$jail_name] = parse_ini_file($contents);
            // if a param contains ',', convert it to an array
            // ie. port=80,443 => port = [80,443]
            foreach ($jails[$jail_name] as $key => $value) {
                if (str_contains($value, ',')) {
                    $jails[$jail_name][$key] = explode(',', $value);
                }
            }
            $jails[$jail_name]['ban_count'] = ConnectionLog::byJail($jail_name)->count();
        }

        return $jails;
*/
        $jails = collect();

        foreach (Storage::files('fail2ban') as $jail) {
            $jail_name = pathinfo($jail, PATHINFO_FILENAME);
            $content = Storage::path($jail);
            $parsed_content = parse_ini_file($content);
            $parsed_content['ban_count'] = ConnectionLog::byJail($jail_name)->count();

            $jails->put($jail_name, $parsed_content);
            // if a param contains ',', convert it to an array
            // ie. port=80,443 => port = [80,443]
            foreach ($parsed_content as $key => $value) {
                if (str_contains($value, ',')) {
                    $parsed_content[$key] = explode(',', $value);
                }
            }
            $jails->put($jail_name, $parsed_content);
        }

        return $jails;
    }

}
