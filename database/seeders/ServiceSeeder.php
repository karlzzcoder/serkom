<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'code' => 'NET-01',
            'title' => 'Instalasi LAN & Access Point',
            'category' => 'Infrastructure',
            'description' => 'Penataan kabel tray, manajemen patch panel, crimping Cat6, dan mapping Wi-Fi Roaming seamless untuk area gedung bertingkat.',
            'specs' => 'Mikrotik / Ruijie / Ubiquiti',
            'image' => null,
        ]);

        Service::create([
            'code' => 'NET-02',
            'title' => 'Internet Dedicated & Bandwidth',
            'category' => 'Connectivity',
            'description' => 'Koneksi Fiber Optic simetris 1:1 tanpa FUP. Dilengkapi IP Public Statis dan backup link otomatis (Failover Redundancy).',
            'specs' => 'SLA 99.9% + IP Public',
            'image' => null,
        ]);

        Service::create([
            'code' => 'NET-03',
            'title' => 'Server Room & Rack Management',
            'category' => 'Support',
            'description' => 'Perakitan Server Rack 42U, instalasi PDU, manajemen pendingin suhu ruangan server, dan sistem kelistrikan UPS terpusat.',
            'specs' => 'Rack 19" & Cooling System',
            'image' => null,
        ]);
    }
}