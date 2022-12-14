<?php

namespace Lkt\Factory\Instantiator\SystemConnections;

use chillerlan\Filereader\Drivers\DiskDriver;

final class FileSystemConnection
{
    /** @var DiskDriver */
    private static $diskDriver;

    /**
     * @return DiskDriver
     */
    public static function getDiskDriver()
    {
        if (!is_object(FileSystemConnection::$diskDriver)) {
            FileSystemConnection::$diskDriver = new DiskDriver();
        }
        return FileSystemConnection::$diskDriver;
    }
}