<?php

// Path asal folder storage yang ada di laravel_core (di luar public_html)
$targetFolder = $_SERVER['DOCUMENT_ROOT'] . '/../laravel_core/storage/app/public';

// Path tujuan shortcut storage yang ditaruh di dalam public_html
$linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';

if (file_exists($linkFolder)) {
    echo "Folder 'storage' sudah terhubung di public_html.";
} elseif (symlink($targetFolder, $linkFolder)) {
    echo "Berhasil! Symbolic link storage sukses dibuat di cPanel.";
} else {
    echo "Gagal membuat symbolic link. Cek kembali path folder kamu.";
}