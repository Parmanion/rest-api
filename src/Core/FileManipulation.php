<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 3/4/19
 * Time: 12:57 PM
 */
declare(strict_types=1);


namespace App\Core;


class FileManipulation
{
    /**
     * Create hexadecimal hash folder with personalized deep
     *
     * @param string $absolutePath
     * @param int    $nbLevel
     */
    public static function hexaHashFolder(string $absolutePath, int $nbLevel): void
    {
        $hex = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'];

        foreach ($hex as $folderNameLevel) {
            $pathLevel = $absolutePath . '/' . $folderNameLevel;
            if ($nbLevel > 1) {
                self::hexaHashFolder($pathLevel, $nbLevel - 1);
            } else {
                if (! is_dir($pathLevel) && ! file_exists($pathLevel)) {
                    if (! mkdir($pathLevel, 0705, true)) {
                        echo $pathLevel . PHP_EOL;
                    }
                }
            }
        }
    }

    public static function getPhotoPathByName(string $name): string
    {
        $md5Path = implode('/', str_split(substr(md5($name), 0, 3)));
        return realpath(__DIR__ . '/../../img/photos/test/' . $md5Path) . '/' . $name;

    }

    public static function delTree($dir) {
        $files = array_diff(scandir($dir), array('.','..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? self::delTree("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }

}
