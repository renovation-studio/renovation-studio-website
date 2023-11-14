<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'img' => 'kitchen.jpg',
                'description' => 'Комплексный ремонт кухни включает в себя заказ, доставку, сборку и установку кухни.',
                'element_services_id' => 1,
                'cost' => 100000,
                'title' => 'Ремонт кухни'
            ],
            [
                'img' => 'bathroom.jpg',
                'description' => 'Комплексный ремонт ванной включает в себя укладку плитки, установку ванной и раковины, а также проведение и настройку всей нужной сантехники.',
                'element_services_id' => 2,
                'cost' => 80000,
                'title' => 'Ремонт ванной'
            ],
            [
                'img' => 'bedroom.jpg',
                'description' => 'Комплексный ремонт спальни включает в себя поклейку обоев, укладку пола, проведение проводки и натягивание потолка.',
                'element_services_id' => 3,
                'cost' => 100000,
                'title' => 'Ремонт спальни'
            ],
            [
                'img' => 'livingroom.jpg',
                'description' => 'Комплексный ремонт гостиной включает в себя установку дивана, кресел, столика, телевизора и шкафа, а также декорирование стен и окон.',
                'element_services_id' => 4,
                'cost' => 120000,
                'title' => 'Ремонт гостиной'
            ],
            [
                'img' => 'hallway.jpg',
                'description' => 'Комплексный ремонт прихожей включает в себя установку зеркала, вешалки, обувницы и полки, а также покраску стен и потолка.',
                'element_services_id' => 5,
                'cost' => 40000,
                'title' => 'Ремонт прихожей'
            ],
            [
                'img' => 'balcony.jpg',
                'description' => 'Комплексный ремонт балкона включает в себя утепление и остекление балкона, укладку ламината или паркета, установку розеток и освещения, а также обустройство мебелью и растениями.',
                'element_services_id' => 6,
                'cost' => 60000,
                'title' => 'Ремонт балкона'
            ],
            [
                'img' => 'office.jpg',
                'description' => 'Комплексный ремонт офиса включает в себя установку рабочих столов, стульев, компьютеров, принтеров и сканеров, а также проведение интернета и телефонии.',
                'element_services_id' => 7,
                'cost' => 150000,
                'title' => 'Ремонт офиса'
            ],
            [
                'img' => 'garage.jpg',
                'description' => 'Комплексный ремонт гаража включает в себя установку автоматических ворот, полочек и шкафов для хранения инструментов и запчастей, а также оборудование для ремонта автомобилей.',
                'element_services_id' => 8,
                'cost' => 80000,
                'title' => 'Ремонт гаража'
            ],
            [
                'img' => 'basement.jpg',
                'description' => 'Комплексный ремонт подвала включает в себя утепление и гидроизоляцию стен и пола, установку вентиляции и отопления, а также обустройство подвала под нужды заказчика.',
                'element_services_id' => 9,
                'cost' => 100000,
                'title' => 'Ремонт подвала'
            ],
            [
                'img' => 'attic.jpg',
                'description' => 'Комплексный ремонт чердака включает в себя утепление и остекление крыши, установку лестницы и двери, а также обустройство чердака под спальню, кабинет или игровую комнату.',
                'element_services_id' => 10,
                'cost' => 120000,
                'title' => 'Ремонт чердака'
            ],
            [
                'img' => 'garden.jpg',
                'description' => 'Комплексный ремонт сада включает в себя посадку и уход за растениями, установку скамеек, фонтанов и декоративных элементов, а также оборудование системы полива и освещения.',
                'element_services_id' => 11,
                'cost' => 80000,
                'title' => 'Ремонт сада'
            ],
            [
                'img' => 'sauna.jpg',
                'description' => 'Комплексный ремонт сауны включает в себя установку печи, паровой камеры, душа и бассейна, а также облицовку стен и пола деревом и камнем.',
                'element_services_id' => 12,
                'cost' => 150000,
                'title' => 'Ремонт сауны'
            ],
            [
                'img' => 'gym.jpg',
                'description' => 'Комплексный ремонт спортзала включает в себя установку спортивного оборудования, зеркал, музыкальной системы и вентиляции, а также покрытие пола резиновым матом.',
                'element_services_id' => 13,
                'cost' => 100000,
                'title' => 'Ремонт спортзала'
            ]
        ];

        DB::table('services')->insert($services);
    }
}
