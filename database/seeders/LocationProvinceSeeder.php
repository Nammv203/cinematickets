<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['province_name' => 'Hà Nội'],
            ['province_name' => 'Thành phố Hồ Chí Minh'],
            ['province_name' => 'Hải Phòng'],
            ['province_name' => 'Đà Nẵng'],
            ['province_name' => 'Cần Thơ'],
            ['province_name' => 'An Giang'],
            ['province_name' => 'Bà Rịa - Vũng Tàu'],
            ['province_name' => 'Bắc Giang'],
            ['province_name' => 'Bắc Kạn'],
            ['province_name' => 'Bạc Liêu'],
            ['province_name' => 'Bắc Ninh'],
            ['province_name' => 'Bến Tre'],
            ['province_name' => 'Bình Định'],
            ['province_name' => 'Bình Dương'],
            ['province_name' => 'Bình Phước'],
            ['province_name' => 'Bình Thuận'],
            ['province_name' => 'Cà Mau'],
            ['province_name' => 'Cao Bằng'],
            ['province_name' => 'Đắk Lắk'],
            ['province_name' => 'Đắk Nông'],
            ['province_name' => 'Điện Biên'],
            ['province_name' => 'Đồng Nai'],
            ['province_name' => 'Đồng Tháp'],
            ['province_name' => 'Gia Lai'],
            ['province_name' => 'Hà Giang'],
            ['province_name' => 'Hà Nam'],
            ['province_name' => 'Hà Tĩnh'],
            ['province_name' => 'Hải Dương'],
            ['province_name' => 'Hậu Giang'],
            ['province_name' => 'Hòa Bình'],
            ['province_name' => 'Hưng Yên'],
            ['province_name' => 'Khánh Hòa'],
            ['province_name' => 'Kiên Giang'],
            ['province_name' => 'Kon Tum'],
            ['province_name' => 'Lai Châu'],
            ['province_name' => 'Lâm Đồng'],
            ['province_name' => 'Lạng Sơn'],
            ['province_name' => 'Lào Cai'],
            ['province_name' => 'Long An'],
            ['province_name' => 'Nam Định'],
            ['province_name' => 'Nghệ An'],
            ['province_name' => 'Ninh Bình'],
            ['province_name' => 'Ninh Thuận'],
            ['province_name' => 'Phú Thọ'],
            ['province_name' => 'Quảng Bình'],
            ['province_name' => 'Quảng Nam'],
            ['province_name' => 'Quảng Ngãi'],
            ['province_name' => 'Quảng Ninh'],
            ['province_name' => 'Quảng Trị'],
            ['province_name' => 'Sóc Trăng'],
            ['province_name' => 'Sơn La'],
            ['province_name' => 'Tây Ninh'],
            ['province_name' => 'Thái Bình'],
            ['province_name' => 'Thái Nguyên'],
            ['province_name' => 'Thanh Hóa'],
            ['province_name' => 'Thừa Thiên Huế'],
            ['province_name' => 'Tiền Giang'],
            ['province_name' => 'Trà Vinh'],
            ['province_name' => 'Tuyên Quang'],
            ['province_name' => 'Vĩnh Long'],
            ['province_name' => 'Vĩnh Phúc'],
            ['province_name' => 'Yên Bái'],
            ['province_name' => 'Phú Yên']
        ];

        DB::table('location_provinces')->insert($provinces);
    }
}
