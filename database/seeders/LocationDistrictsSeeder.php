<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationDistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            // Hà Nội
            ['province_id' => 1, 'district_name' => 'Ba Đình'],
            ['province_id' => 1, 'district_name' => 'Hoàn Kiếm'],
            ['province_id' => 1, 'district_name' => 'Tây Hồ'],
            ['province_id' => 1, 'district_name' => 'Long Biên'],
            ['province_id' => 1, 'district_name' => 'Cầu Giấy'],
            ['province_id' => 1, 'district_name' => 'Đống Đa'],
            ['province_id' => 1, 'district_name' => 'Hai Bà Trưng'],
            ['province_id' => 1, 'district_name' => 'Hoàng Mai'],
            ['province_id' => 1, 'district_name' => 'Thanh Xuân'],
            ['province_id' => 1, 'district_name' => 'Sóc Sơn'],
            ['province_id' => 1, 'district_name' => 'Đông Anh'],
            ['province_id' => 1, 'district_name' => 'Gia Lâm'],
            ['province_id' => 1, 'district_name' => 'Nam Từ Liêm'],
            ['province_id' => 1, 'district_name' => 'Thanh Trì'],
            ['province_id' => 1, 'district_name' => 'Bắc Từ Liêm'],
            ['province_id' => 1, 'district_name' => 'Mê Linh'],

            // Thành phố Hồ Chí Minh
            ['province_id' => 2, 'district_name' => 'Quận 1'],
            ['province_id' => 2, 'district_name' => 'Quận 2'],
            ['province_id' => 2, 'district_name' => 'Quận 3'],
            ['province_id' => 2, 'district_name' => 'Quận 4'],
            ['province_id' => 2, 'district_name' => 'Quận 5'],
            ['province_id' => 2, 'district_name' => 'Quận 6'],
            ['province_id' => 2, 'district_name' => 'Quận 7'],
            ['province_id' => 2, 'district_name' => 'Quận 8'],
            ['province_id' => 2, 'district_name' => 'Quận 9'],
            ['province_id' => 2, 'district_name' => 'Quận 10'],
            ['province_id' => 2, 'district_name' => 'Quận 11'],
            ['province_id' => 2, 'district_name' => 'Quận 12'],
            ['province_id' => 2, 'district_name' => 'Quận Bình Thạnh'],
            ['province_id' => 2, 'district_name' => 'Quận Gò Vấp'],
            ['province_id' => 2, 'district_name' => 'Quận Phú Nhuận'],
            ['province_id' => 2, 'district_name' => 'Quận Tân Bình'],
            ['province_id' => 2, 'district_name' => 'Quận Tân Phú'],
            ['province_id' => 2, 'district_name' => 'Quận Bình Tân'],
            ['province_id' => 2, 'district_name' => 'Huyện Bình Chánh'],
            ['province_id' => 2, 'district_name' => 'Huyện Cần Giờ'],
            ['province_id' => 2, 'district_name' => 'Huyện Củ Chi'],
            ['province_id' => 2, 'district_name' => 'Huyện Hóc Môn'],
            ['province_id' => 2, 'district_name' => 'Huyện Nhà Bè'],

            // Hải Phòng
            ['province_id' => 3, 'district_name' => 'Quận Hồng Bàng'],
            ['province_id' => 3, 'district_name' => 'Quận Lê Chân'],
            ['province_id' => 3, 'district_name' => 'Quận Ngô Quyền'],
            ['province_id' => 3, 'district_name' => 'Quận Kiến An'],
            ['province_id' => 3, 'district_name' => 'Quận Hải An'],
            ['province_id' => 3, 'district_name' => 'Quận Đồ Sơn'],
            ['province_id' => 3, 'district_name' => 'Quận Dương Kinh'],
            ['province_id' => 3, 'district_name' => 'Huyện An Dương'],
            ['province_id' => 3, 'district_name' => 'Huyện An Lão'],
            ['province_id' => 3, 'district_name' => 'Huyện Kiến Thụy'],
            ['province_id' => 3, 'district_name' => 'Huyện Thủy Nguyên'],
            ['province_id' => 3, 'district_name' => 'Huyện Tiên Lãng'],
            ['province_id' => 3, 'district_name' => 'Huyện Vĩnh Bảo'],
            ['province_id' => 3, 'district_name' => 'Huyện Cát Hải'],
            ['province_id' => 3, 'district_name' => 'Huyện Bạch Long Vĩ'],

            // Đà Nẵng
            ['province_id' => 4, 'district_name' => 'Quận Hải Châu'],
            ['province_id' => 4, 'district_name' => 'Quận Thanh Khê'],
            ['province_id' => 4, 'district_name' => 'Quận Sơn Trà'],
            ['province_id' => 4, 'district_name' => 'Quận Ngũ Hành Sơn'],
            ['province_id' => 4, 'district_name' => 'Quận Liên Chiểu'],
            ['province_id' => 4, 'district_name' => 'Quận Cẩm Lệ'],
            ['province_id' => 4, 'district_name' => 'Huyện Hòa Vang'],
            ['province_id' => 4, 'district_name' => 'Huyện Hoàng Sa'],

            // Cần Thơ
            ['province_id' => 5, 'district_name' => 'Ninh Kiều'],
            ['province_id' => 5, 'district_name' => 'Bình Thủy'],
            ['province_id' => 5, 'district_name' => 'Ô Môn'],
            ['province_id' => 5, 'district_name' => 'Thốt Nốt'],
            ['province_id' => 5, 'district_name' => 'Phong Điền'],
            ['province_id' => 5, 'district_name' => 'Cờ Đỏ'],
            ['province_id' => 5, 'district_name' => 'Vĩnh Thạnh'],
            ['province_id' => 5, 'district_name' => 'Thới Lai'],
            ['province_id' => 5, 'district_name' => 'Huyện Ninh Kiều'],
            ['province_id' => 5, 'district_name' => 'Huyện Vĩnh Thạnh'],

            // An Giang
            ['province_id' => 6, 'district_name' => 'Long Xuyên'],
            ['province_id' => 6, 'district_name' => 'Châu Đốc'],
            ['province_id' => 6, 'district_name' => 'Tân Châu'],
            ['province_id' => 6, 'district_name' => 'An Phú'],
            ['province_id' => 6, 'district_name' => 'Chợ Mới'],
            ['province_id' => 6, 'district_name' => 'Phú Tân'],
            ['province_id' => 6, 'district_name' => 'Tri Tôn'],
            ['province_id' => 6, 'district_name' => 'Tịnh Biên'],
            ['province_id' => 6, 'district_name' => 'Huyện Thoại Sơn'],

            // Bà Rịa - Vũng Tàu
            ['province_id' => 7, 'district_name' => 'Thành phố Vũng Tàu'],
            ['province_id' => 7, 'district_name' => 'Thành phố Bà Rịa'],
            ['province_id' => 7, 'district_name' => 'Huyện Châu Đức'],
            ['province_id' => 7, 'district_name' => 'Huyện Xuyên Mộc'],
            ['province_id' => 7, 'district_name' => 'Huyện Long Điền'],
            ['province_id' => 7, 'district_name' => 'Huyện Đất Đỏ'],
            ['province_id' => 7, 'district_name' => 'Huyện Tân Thành'],

            // Bắc Giang
            ['province_id' => 8, 'district_name' => 'Thành phố Bắc Giang'],
            ['province_id' => 8, 'district_name' => 'Huyện Lục Ngạn'],
            ['province_id' => 8, 'district_name' => 'Huyện Lục Nam'],
            ['province_id' => 8, 'district_name' => 'Huyện Yên Thế'],
            ['province_id' => 8, 'district_name' => 'Huyện Tân Yên'],
            ['province_id' => 8, 'district_name' => 'Huyện Hiệp Hòa'],
            ['province_id' => 8, 'district_name' => 'Huyện Sơn Động'],
            ['province_id' => 8, 'district_name' => 'Huyện Việt Yên'],
            ['province_id' => 8, 'district_name' => 'Huyện Xuân Lộc'],

            // Bạc Kạn
            ['province_id' => 9, 'district_name' => 'Thành phố Bắc Kạn'],
            ['province_id' => 9, 'district_name' => 'Huyện Ba Bể'],
            ['province_id' => 9, 'district_name' => 'Huyện Ngân Sơn'],
            ['province_id' => 9, 'district_name' => 'Huyện Chợ Đồn'],
            ['province_id' => 9, 'district_name' => 'Huyện Chợ Mới'],
            ['province_id' => 9, 'district_name' => 'Huyện Pác Nặm'],

            // Bạc Liêu
            ['province_id' => 10, 'district_name' => 'Thành phố Bạc Liêu'],
            ['province_id' => 10, 'district_name' => 'Huyện Bạc Liêu'],
            ['province_id' => 10, 'district_name' => 'Huyện Giá Rai'],
            ['province_id' => 10, 'district_name' => 'Huyện Hòa Bình'],
            ['province_id' => 10, 'district_name' => 'Huyện Phước Long'],
            ['province_id' => 10, 'district_name' => 'Huyện Vĩnh Lợi'],

            // Bắc Ninh
            ['province_id' => 11, 'district_name' => 'Thành phố Bắc Ninh'],
            ['province_id' => 11, 'district_name' => 'Huyện Gia Bình'],
            ['province_id' => 11, 'district_name' => 'Huyện Lương Tài'],
            ['province_id' => 11, 'district_name' => 'Huyện Quế Võ'],
            ['province_id' => 11, 'district_name' => 'Huyện Yên Phong'],
            ['province_id' => 11, 'district_name' => 'Huyện Tiên Du'],

            // Bến Tre
            ['province_id' => 12, 'district_name' => 'Thành phố Bến Tre'],
            ['province_id' => 12, 'district_name' => 'Huyện Bến Tre'],
            ['province_id' => 12, 'district_name' => 'Huyện Châu Thành'],
            ['province_id' => 12, 'district_name' => 'Huyện Giồng Trôm'],
            ['province_id' => 12, 'district_name' => 'Huyện Mỏ Cày Bắc'],
            ['province_id' => 12, 'district_name' => 'Huyện Mỏ Cày Nam'],
            ['province_id' => 12, 'district_name' => 'Huyện Thạnh Phú'],
            ['province_id' => 12, 'district_name' => 'Huyện Ba Tri'],
            ['province_id' => 12, 'district_name' => 'Huyện Bình Đại'],
            // Bình Định
            ['province_id' => 13, 'district_name' => 'Thành phố Quy Nhơn'],
            ['province_id' => 13, 'district_name' => 'Huyện An Lão'],
            ['province_id' => 13, 'district_name' => 'Huyện Hoài Nhơn'],
            ['province_id' => 13, 'district_name' => 'Huyện Phù Cát'],
            ['province_id' => 13, 'district_name' => 'Huyện Phù Mỹ'],
            ['province_id' => 13, 'district_name' => 'Huyện Tuy Phước'],
            ['province_id' => 13, 'district_name' => 'Huyện Vĩnh Thạnh'],
            ['province_id' => 13, 'district_name' => 'Huyện Tây Sơn'],
            ['province_id' => 13, 'district_name' => 'Huyện Hoài Ân'],
            ['province_id' => 13, 'district_name' => 'Huyện Đức Phổ'],

            // Bình Dương
            ['province_id' => 14, 'district_name' => 'Thành phố Thủ Dầu Một'],
            ['province_id' => 14, 'district_name' => 'Thành phố Dĩ An'],
            ['province_id' => 14, 'district_name' => 'Thành phố Thuận An'],
            ['province_id' => 14, 'district_name' => 'Huyện Bàu Bàng'],
            ['province_id' => 14, 'district_name' => 'Huyện Bắc Tân Uyên'],
            ['province_id' => 14, 'district_name' => 'Huyện Dầu Tiếng'],
            ['province_id' => 14, 'district_name' => 'Huyện Phú Giáo'],

            // Bình Phước
            ['province_id' => 15, 'district_name' => 'Thành phố Đồng Xoài'],
            ['province_id' => 15, 'district_name' => 'Huyện Bù Đốp'],
            ['province_id' => 15, 'district_name' => 'Huyện Bù Gia Mập'],
            ['province_id' => 15, 'district_name' => 'Huyện Chơn Thành'],
            ['province_id' => 15, 'district_name' => 'Huyện Đồng Phú'],
            ['province_id' => 15, 'district_name' => 'Huyện Phước Long'],
            ['province_id' => 15, 'district_name' => 'Huyện Lộc Ninh'],

            // Bình Thuận
            ['province_id' => 16, 'district_name' => 'Thành phố Phan Thiết'],
            ['province_id' => 16, 'district_name' => 'Huyện Bắc Bình'],
            ['province_id' => 16, 'district_name' => 'Huyện Hàm Thuận Bắc'],
            ['province_id' => 16, 'district_name' => 'Huyện Hàm Thuận Nam'],
            ['province_id' => 16, 'district_name' => 'Huyện Tuy Phong'],
            ['province_id' => 16, 'district_name' => 'Huyện Đức Linh'],
            ['province_id' => 16, 'district_name' => 'Huyện Tánh Linh'],
            ['province_id' => 16, 'district_name' => 'Huyện Phú Quý'],
            // Cà Mau
            ['province_id' => 17, 'district_name' => 'Thành phố Cà Mau'],
            ['province_id' => 17, 'district_name' => 'Huyện Cái Nước'],
            ['province_id' => 17, 'district_name' => 'Huyện Đầm Dơi'],
            ['province_id' => 17, 'district_name' => 'Huyện Năm Căn'],
            ['province_id' => 17, 'district_name' => 'Huyện Ngọc Hiển'],
            ['province_id' => 17, 'district_name' => 'Huyện Thới Bình'],
            ['province_id' => 17, 'district_name' => 'Huyện Trần Văn Thời'],
            ['province_id' => 17, 'district_name' => 'Huyện Phú Tân'],

            // Cao Bằng
            ['province_id' => 18, 'district_name' => 'Thành phố Cao Bằng'],
            ['province_id' => 18, 'district_name' => 'Huyện Bảo Lạc'],
            ['province_id' => 18, 'district_name' => 'Huyện Bảo Lâm'],
            ['province_id' => 18, 'district_name' => 'Huyện Thạch An'],
            ['province_id' => 18, 'district_name' => 'Huyện Quảng Hòa'],
            ['province_id' => 18, 'district_name' => 'Huyện Trà Lĩnh'],
            ['province_id' => 18, 'district_name' => 'Huyện Trùng Khánh'],
            ['province_id' => 18, 'district_name' => 'Huyện Hạ Lang'],
            ['province_id' => 18, 'district_name' => 'Huyện Nguyên Bình'],
            ['province_id' => 18, 'district_name' => 'Huyện Thông Nông'],

            // Đắk Lắk
            ['province_id' => 19, 'district_name' => 'Thành phố Buôn Ma Thuột'],
            ['province_id' => 19, 'district_name' => 'Huyện Cư Kuin'],
            ['province_id' => 19, 'district_name' => 'Huyện Ea H\'leo'],
            ['province_id' => 19, 'district_name' => 'Huyện Krông Búk'],
            ['province_id' => 19, 'district_name' => 'Huyện Krông Năng'],
            ['province_id' => 19, 'district_name' => 'Huyện Lăk'],
            ['province_id' => 19, 'district_name' => 'Huyện Ea Súp'],
            ['province_id' => 19, 'district_name' => 'Huyện Buôn Đôn'],
            ['province_id' => 19, 'district_name' => 'Huyện M\'Đrắk'],
            ['province_id' => 19, 'district_name' => 'Huyện Cư M\'gar'],

            // Đắk Nông
            ['province_id' => 20, 'district_name' => 'Thành phố Gia Nghĩa'],
            ['province_id' => 20, 'district_name' => 'Huyện Đắk Glong'],
            ['province_id' => 20, 'district_name' => 'Huyện Đắk Mil'],
            ['province_id' => 20, 'district_name' => 'Huyện Cư Jút'],
            ['province_id' => 20, 'district_name' => 'Huyện Krông Nô'],
            ['province_id' => 20, 'district_name' => 'Huyện Tuy Đức'],
            // Điện Biên
            ['province_id' => 21, 'district_name' => 'Thành phố Điện Biên Phủ'],
            ['province_id' => 21, 'district_name' => 'Huyện Điện Biên'],
            ['province_id' => 21, 'district_name' => 'Huyện Điện Biên Đông'],
            ['province_id' => 21, 'district_name' => 'Huyện Mường Nhé'],
            ['province_id' => 21, 'district_name' => 'Huyện Mường Lay'],
            ['province_id' => 21, 'district_name' => 'Huyện Tủa Chùa'],
            ['province_id' => 21, 'district_name' => 'Huyện Nậm Pồ'],
            ['province_id' => 21, 'district_name' => 'Huyện Tuần Giáo'],

            // Đồng Nai
            ['province_id' => 22, 'district_name' => 'Thành phố Biên Hòa'],
            ['province_id' => 22, 'district_name' => 'Thành phố Long Thành'],
            ['province_id' => 22, 'district_name' => 'Huyện Nhơn Trạch'],
            ['province_id' => 22, 'district_name' => 'Huyện Vĩnh Cửu'],
            ['province_id' => 22, 'district_name' => 'Huyện Tân Phú'],
            ['province_id' => 22, 'district_name' => 'Huyện Định Quán'],
            ['province_id' => 22, 'district_name' => 'Huyện Xuân Lộc'],
            ['province_id' => 22, 'district_name' => 'Huyện Long Thành'],

            // Đồng Tháp
            ['province_id' => 23, 'district_name' => 'Thành phố Cao Lãnh'],
            ['province_id' => 23, 'district_name' => 'Thành phố Sa Đéc'],
            ['province_id' => 23, 'district_name' => 'Huyện Cao Lãnh'],
            ['province_id' => 23, 'district_name' => 'Huyện Hồng Ngự'],
            ['province_id' => 23, 'district_name' => 'Huyện Tam Nông'],
            ['province_id' => 23, 'district_name' => 'Huyện Thanh Bình'],
            ['province_id' => 23, 'district_name' => 'Huyện Tân Hồng'],
            ['province_id' => 23, 'district_name' => 'Huyện Châu Thành'],

            // Gia Lai
            ['province_id' => 24, 'district_name' => 'Thành phố Pleiku'],
            ['province_id' => 24, 'district_name' => 'Huyện An Khê'],
            ['province_id' => 24, 'district_name' => 'Huyện Chư Prông'],
            ['province_id' => 24, 'district_name' => 'Huyện Chư Sê'],
            ['province_id' => 24, 'district_name' => 'Huyện Đăk Pơ'],
            ['province_id' => 24, 'district_name' => 'Huyện Kông Chro'],
            ['province_id' => 24, 'district_name' => 'Huyện Krông Pa'],
            ['province_id' => 24, 'district_name' => 'Huyện Ia Grai'],
            ['province_id' => 24, 'district_name' => 'Huyện Mang Yang'],
            ['province_id' => 24, 'district_name' => 'Huyện Phú Thiện'],
            ['province_id' => 24, 'district_name' => 'Huyện Đức Cơ'],

            // Hà Giang
            ['province_id' => 25, 'district_name' => 'Thành phố Hà Giang'],
            ['province_id' => 25, 'district_name' => 'Huyện Đồng Văn'],
            ['province_id' => 25, 'district_name' => 'Huyện Mèo Vạc'],
            ['province_id' => 25, 'district_name' => 'Huyện Vị Xuyên'],
            ['province_id' => 25, 'district_name' => 'Huyện Bắc Mê'],
            ['province_id' => 25, 'district_name' => 'Huyện Hoàng Su Phì'],
            ['province_id' => 25, 'district_name' => 'Huyện Xín Mần'],
            ['province_id' => 25, 'district_name' => 'Huyện Quang Bình'],

            // Hà Nam
            ['province_id' => 26, 'district_name' => 'Thành phố Phủ Lý'],
            ['province_id' => 26, 'district_name' => 'Huyện Bình Lục'],
            ['province_id' => 26, 'district_name' => 'Huyện Duy Tiên'],
            ['province_id' => 26, 'district_name' => 'Huyện Kim Bảng'],
            ['province_id' => 26, 'district_name' => 'Huyện Lý Nhân'],
            // Hà Tĩnh
            ['province_id' => 27, 'district_name' => 'Thành phố Hà Tĩnh'],
            ['province_id' => 27, 'district_name' => 'Huyện Hương Khê'],
            ['province_id' => 27, 'district_name' => 'Huyện Hương Sơn'],
            ['province_id' => 27, 'district_name' => 'Huyện Kỳ Anh'],
            ['province_id' => 27, 'district_name' => 'Huyện Nghi Xuân'],
            ['province_id' => 27, 'district_name' => 'Huyện Thạch Hà'],
            ['province_id' => 27, 'district_name' => 'Huyện Can Lộc'],
            ['province_id' => 27, 'district_name' => 'Huyện Đức Thọ'],
            ['province_id' => 27, 'district_name' => 'Huyện Vũ Quang'],
            ['province_id' => 27, 'district_name' => 'Huyện Lộc Hà'],

            // Hải Dương
            ['province_id' => 28, 'district_name' => 'Thành phố Hải Dương'],
            ['province_id' => 28, 'district_name' => 'Huyện Bình Giang'],
            ['province_id' => 28, 'district_name' => 'Huyện Cẩm Giàng'],
            ['province_id' => 28, 'district_name' => 'Huyện Gia Lộc'],
            ['province_id' => 28, 'district_name' => 'Huyện Kim Thành'],
            ['province_id' => 28, 'district_name' => 'Huyện Kinh Môn'],
            ['province_id' => 28, 'district_name' => 'Huyện Nam Sách'],
            ['province_id' => 28, 'district_name' => 'Huyện Ninh Giang'],
            ['province_id' => 28, 'district_name' => 'Huyện Thanh Hà'],
            ['province_id' => 28, 'district_name' => 'Huyện Tứ Kỳ'],

            // Hậu Giang
            ['province_id' => 29, 'district_name' => 'Thành phố Vị Thanh'],
            ['province_id' => 29, 'district_name' => 'Huyện Châu Thành'],
            ['province_id' => 29, 'district_name' => 'Huyện Châu Thành A'],
            ['province_id' => 29, 'district_name' => 'Huyện Long Mỹ'],
            ['province_id' => 29, 'district_name' => 'Huyện Ngã Bảy'],
            ['province_id' => 29, 'district_name' => 'Huyện Phụng Hiệp'],
            ['province_id' => 29, 'district_name' => 'Huyện Vị Thủy'],

            // Hòa Bình
            ['province_id' => 30, 'district_name' => 'Thành phố Hòa Bình'],
            ['province_id' => 30, 'district_name' => 'Huyện Đà Bắc'],
            ['province_id' => 30, 'district_name' => 'Huyện Cao Phong'],
            ['province_id' => 30, 'district_name' => 'Huyện Kim Bôi'],
            ['province_id' => 30, 'district_name' => 'Huyện Lạc Sơn'],
            ['province_id' => 30, 'district_name' => 'Huyện Lương Sơn'],
            ['province_id' => 30, 'district_name' => 'Huyện Tân Lạc'],
            ['province_id' => 30, 'district_name' => 'Huyện Mai Châu'],

            // Hưng Yên
            ['province_id' => 31, 'district_name' => 'Thành phố Hưng Yên'],
            ['province_id' => 31, 'district_name' => 'Huyện Ân Thi'],
            ['province_id' => 31, 'district_name' => 'Huyện Bình Giang'],
            ['province_id' => 31, 'district_name' => 'Huyện Khoái Châu'],
            ['province_id' => 31, 'district_name' => 'Huyện Kim Động'],
            ['province_id' => 31, 'district_name' => 'Huyện Mỹ Hào'],
            ['province_id' => 31, 'district_name' => 'Huyện Phù Cừ'],
            ['province_id' => 31, 'district_name' => 'Huyện Tiên Lữ'],

            // Khánh Hòa
            ['province_id' => 32, 'district_name' => 'Thành phố Nha Trang'],
            ['province_id' => 32, 'district_name' => 'Thành phố Cam Ranh'],
            ['province_id' => 32, 'district_name' => 'Huyện Diên Khánh'],
            ['province_id' => 32, 'district_name' => 'Huyện Khánh Vĩnh'],
            ['province_id' => 32, 'district_name' => 'Huyện Vạn Ninh'],
            ['province_id' => 32, 'district_name' => 'Huyện Ninh Hòa'],
            ['province_id' => 32, 'district_name' => 'Huyện Cam Lâm'],
            ['province_id' => 32, 'district_name' => 'Huyện Trường Sa'],
            // Kiên Giang
            ['province_id' => 33, 'district_name' => 'Thành phố Rạch Giá'],
            ['province_id' => 33, 'district_name' => 'Thành phố Hà Tiên'],
            ['province_id' => 33, 'district_name' => 'Huyện An Biên'],
            ['province_id' => 33, 'district_name' => 'Huyện An Minh'],
            ['province_id' => 33, 'district_name' => 'Huyện Châu Thành'],
            ['province_id' => 33, 'district_name' => 'Huyện Giang Thành'],
            ['province_id' => 33, 'district_name' => 'Huyện Kiên Hải'],
            ['province_id' => 33, 'district_name' => 'Huyện Phú Quốc'],
            ['province_id' => 33, 'district_name' => 'Huyện U Minh Thượng'],

            // Kon Tum
            ['province_id' => 34, 'district_name' => 'Thành phố Kon Tum'],
            ['province_id' => 34, 'district_name' => 'Huyện Đắk Glei'],
            ['province_id' => 34, 'district_name' => 'Huyện Đắk Hà'],
            ['province_id' => 34, 'district_name' => 'Huyện Kon Plong'],
            ['province_id' => 34, 'district_name' => 'Huyện Kon Rẫy'],
            ['province_id' => 34, 'district_name' => 'Huyện Ngọc Hồi'],
            ['province_id' => 34, 'district_name' => 'Huyện Sa Thầy'],
            ['province_id' => 34, 'district_name' => 'Huyện Tu Mơ Rông'],

            // Lai Châu
            ['province_id' => 35, 'district_name' => 'Thành phố Lai Châu'],
            ['province_id' => 35, 'district_name' => 'Huyện Mường Tè'],
            ['province_id' => 35, 'district_name' => 'Huyện Nậm Nhùn'],
            ['province_id' => 35, 'district_name' => 'Huyện Tam Đường'],
            ['province_id' => 35, 'district_name' => 'Huyện Phong Thổ'],
            ['province_id' => 35, 'district_name' => 'Huyện Tân Uyên'],
            ['province_id' => 35, 'district_name' => 'Huyện Sìn Hồ'],

            // Lâm Đồng
            ['province_id' => 36, 'district_name' => 'Thành phố Đà Lạt'],
            ['province_id' => 36, 'district_name' => 'Thành phố Bảo Lộc'],
            ['province_id' => 36, 'district_name' => 'Huyện Đơn Dương'],
            ['province_id' => 36, 'district_name' => 'Huyện Đức Trọng'],
            ['province_id' => 36, 'district_name' => 'Huyện Lạc Dương'],
            ['province_id' => 36, 'district_name' => 'Huyện Lâm Hà'],
            ['province_id' => 36, 'district_name' => 'Huyện Đạ Huoai'],
            ['province_id' => 36, 'district_name' => 'Huyện Đạ Tẻh'],
            ['province_id' => 36, 'district_name' => 'Huyện Ninh Sơn'],

            // Lạng Sơn
            ['province_id' => 37, 'district_name' => 'Thành phố Lạng Sơn'],
            ['province_id' => 37, 'district_name' => 'Huyện Bắc Sơn'],
            ['province_id' => 37, 'district_name' => 'Huyện Bình Gia'],
            ['province_id' => 37, 'district_name' => 'Huyện Đình Lập'],
            ['province_id' => 37, 'district_name' => 'Huyện Hữu Lũng'],
            ['province_id' => 37, 'district_name' => 'Huyện Lộc Bình'],
            ['province_id' => 37, 'district_name' => 'Huyện Chi Lăng'],
            ['province_id' => 37, 'district_name' => 'Huyện Văn Lãng'],

            // Lào Cai
            ['province_id' => 38, 'district_name' => 'Thành phố Lào Cai'],
            ['province_id' => 38, 'district_name' => 'Huyện Bát Xát'],
            ['province_id' => 38, 'district_name' => 'Huyện Bắc Hà'],
            ['province_id' => 38, 'district_name' => 'Huyện Sa Pa'],
            ['province_id' => 38, 'district_name' => 'Huyện Văn Bàn'],
            ['province_id' => 38, 'district_name' => 'Huyện Mường Khương'],
            // Long An
            ['province_id' => 39, 'district_name' => 'Thành phố Tân An'],
            ['province_id' => 39, 'district_name' => 'Huyện Bến Lức'],
            ['province_id' => 39, 'district_name' => 'Huyện Châu Thành'],
            ['province_id' => 39, 'district_name' => 'Huyện Cần Đước'],
            ['province_id' => 39, 'district_name' => 'Huyện Cần Giuộc'],
            ['province_id' => 39, 'district_name' => 'Huyện Đức Hòa'],
            ['province_id' => 39, 'district_name' => 'Huyện Đức Huệ'],
            ['province_id' => 39, 'district_name' => 'Huyện Kiến Tường'],
            ['province_id' => 39, 'district_name' => 'Huyện Thủ Thừa'],
            ['province_id' => 39, 'district_name' => 'Huyện Tân Hưng'],
            ['province_id' => 39, 'district_name' => 'Huyện Tân Thạnh'],
            ['province_id' => 39, 'district_name' => 'Huyện Vĩnh Hưng'],

            // Nam Định
            ['province_id' => 40, 'district_name' => 'Thành phố Nam Định'],
            ['province_id' => 40, 'district_name' => 'Huyện Giao Thủy'],
            ['province_id' => 40, 'district_name' => 'Huyện Hải Hậu'],
            ['province_id' => 40, 'district_name' => 'Huyện Nam Trực'],
            ['province_id' => 40, 'district_name' => 'Huyện Nghĩa Hưng'],
            ['province_id' => 40, 'district_name' => 'Huyện Trực Ninh'],
            ['province_id' => 40, 'district_name' => 'Huyện Vụ Bản'],
            ['province_id' => 40, 'district_name' => 'Huyện Xuân Trường'],

            // Nghệ An
            ['province_id' => 41, 'district_name' => 'Thành phố Vinh'],
            ['province_id' => 41, 'district_name' => 'Thị xã Cửa Lò'],
            ['province_id' => 41, 'district_name' => 'Huyện Anh Sơn'],
            ['province_id' => 41, 'district_name' => 'Huyện Con Cuông'],
            ['province_id' => 41, 'district_name' => 'Huyện Diễn Châu'],
            ['province_id' => 41, 'district_name' => 'Huyện Đô Lương'],
            ['province_id' => 41, 'district_name' => 'Huyện Hưng Nguyên'],
            ['province_id' => 41, 'district_name' => 'Huyện Nghi Lộc'],
            ['province_id' => 41, 'district_name' => 'Huyện Nam Đàn'],
            ['province_id' => 41, 'district_name' => 'Huyện Quế Phong'],
            ['province_id' => 41, 'district_name' => 'Huyện Quỳ Châu'],
            ['province_id' => 41, 'district_name' => 'Huyện Quỳnh Lưu'],
            ['province_id' => 41, 'district_name' => 'Huyện Tân Kỳ'],
            ['province_id' => 41, 'district_name' => 'Huyện Thanh Chương'],
            ['province_id' => 41, 'district_name' => 'Huyện Yên Thành'],

            // Ninh Bình
            ['province_id' => 42, 'district_name' => 'Thành phố Ninh Bình'],
            ['province_id' => 42, 'district_name' => 'Huyện Gia Viễn'],
            ['province_id' => 42, 'district_name' => 'Huyện Hoa Lư'],
            ['province_id' => 42, 'district_name' => 'Huyện Kim Sơn'],
            ['province_id' => 42, 'district_name' => 'Huyện Nho Quan'],
            ['province_id' => 42, 'district_name' => 'Huyện Yên Khánh'],

            // Ninh Thuận
            ['province_id' => 43, 'district_name' => 'Thành phố Phan Rang - Tháp Chàm'],
            ['province_id' => 43, 'district_name' => 'Huyện Bác Ái'],
            ['province_id' => 43, 'district_name' => 'Huyện Ninh Hải'],
            ['province_id' => 43, 'district_name' => 'Huyện Ninh Phước'],
            ['province_id' => 43, 'district_name' => 'Huyện Thuận Bắc'],
            ['province_id' => 43, 'district_name' => 'Huyện Thuận Nam'],

            // Phú Thọ
            ['province_id' => 44, 'district_name' => 'Thành phố Việt Trì'],
            ['province_id' => 44, 'district_name' => 'Thị xã Phú Thọ'],
            ['province_id' => 44, 'district_name' => 'Huyện Cẩm Khê'],
            ['province_id' => 44, 'district_name' => 'Huyện Đoan Hùng'],
            ['province_id' => 44, 'district_name' => 'Huyện Hạ Hòa'],
            ['province_id' => 44, 'district_name' => 'Huyện Lâm Thao'],
            ['province_id' => 44, 'district_name' => 'Huyện Tam Nông'],
            ['province_id' => 44, 'district_name' => 'Huyện Tân Sơn'],
            ['province_id' => 44, 'district_name' => 'Huyện Thanh Ba'],
            ['province_id' => 44, 'district_name' => 'Huyện Phù Ninh'],
            ['province_id' => 44, 'district_name' => 'Huyện Yên Lập'],
            // Quảng Bình
            ['province_id' => 45, 'district_name' => 'Thành phố Đồng Hới'],
            ['province_id' => 45, 'district_name' => 'Huyện Bố Trạch'],
            ['province_id' => 45, 'district_name' => 'Huyện Quảng Trạch'],
            ['province_id' => 45, 'district_name' => 'Huyện Tuyên Hóa'],
            ['province_id' => 45, 'district_name' => 'Huyện Minh Hóa'],
            ['province_id' => 45, 'district_name' => 'Huyện Lệ Thủy'],

            // Quảng Nam
            ['province_id' => 46, 'district_name' => 'Thành phố Tam Kỳ'],
            ['province_id' => 46, 'district_name' => 'Thành phố Hội An'],
            ['province_id' => 46, 'district_name' => 'Huyện Bắc Trà My'],
            ['province_id' => 46, 'district_name' => 'Huyện Đại Lộc'],
            ['province_id' => 46, 'district_name' => 'Huyện Duy Xuyên'],
            ['province_id' => 46, 'district_name' => 'Huyện Điện Bàn'],
            ['province_id' => 46, 'district_name' => 'Huyện Nam Giang'],
            ['province_id' => 46, 'district_name' => 'Huyện Phước Sơn'],
            ['province_id' => 46, 'district_name' => 'Huyện Quế Sơn'],
            ['province_id' => 46, 'district_name' => 'Huyện Thăng Bình'],
            ['province_id' => 46, 'district_name' => 'Huyện Tiên Phước'],
            ['province_id' => 46, 'district_name' => 'Huyện Núi Thành'],

            // Quảng Ngãi
            ['province_id' => 47, 'district_name' => 'Thành phố Quảng Ngãi'],
            ['province_id' => 47, 'district_name' => 'Huyện Bình Sơn'],
            ['province_id' => 47, 'district_name' => 'Huyện Đức Phổ'],
            ['province_id' => 47, 'district_name' => 'Huyện Hoài Nhơn'],
            ['province_id' => 47, 'district_name' => 'Huyện Minh Long'],
            ['province_id' => 47, 'district_name' => 'Huyện Nghĩa Hành'],
            ['province_id' => 47, 'district_name' => 'Huyện Sơn Tịnh'],
            ['province_id' => 47, 'district_name' => 'Huyện Tư Nghĩa'],
            ['province_id' => 47, 'district_name' => 'Huyện Trà Bồng'],
            ['province_id' => 47, 'district_name' => 'Huyện Tây Trà'],
            ['province_id' => 47, 'district_name' => 'Huyện Lý Sơn'],

            // Quảng Ninh
            ['province_id' => 48, 'district_name' => 'Thành phố Hạ Long'],
            ['province_id' => 48, 'district_name' => 'Thành phố Móng Cái'],
            ['province_id' => 48, 'district_name' => 'Thành phố Uông Bí'],
            ['province_id' => 48, 'district_name' => 'Thành phố Cẩm Phả'],
            ['province_id' => 48, 'district_name' => 'Thành phố Đông Triều'],
            ['province_id' => 48, 'district_name' => 'Huyện Ba Chẽ'],
            ['province_id' => 48, 'district_name' => 'Huyện Bình Liêu'],
            ['province_id' => 48, 'district_name' => 'Huyện Đầm Hà'],
            ['province_id' => 48, 'district_name' => 'Huyện Hải Hà'],
            ['province_id' => 48, 'district_name' => 'Huyện Hoành Bồ'],
            ['province_id' => 48, 'district_name' => 'Huyện Vân Đồn'],

            // Quảng Trị
            ['province_id' => 49, 'district_name' => 'Thành phố Đông Hà'],
            ['province_id' => 49, 'district_name' => 'Thị xã Quảng Trị'],
            ['province_id' => 49, 'district_name' => 'Huyện Cam Lộ'],
            ['province_id' => 49, 'district_name' => 'Huyện Cồn Cỏ'],
            ['province_id' => 49, 'district_name' => 'Huyện Gio Linh'],
            ['province_id' => 49, 'district_name' => 'Huyện Hải Lăng'],
            ['province_id' => 49, 'district_name' => 'Huyện Đăk Rôa'],
            ['province_id' => 49, 'district_name' => 'Huyện Vĩnh Linh'],
            ['province_id' => 49, 'district_name' => 'Huyện Triệu Phong'],
            ['province_id' => 49, 'district_name' => 'Huyện Hướng Hóa'],

            // Sóc Trăng
            ['province_id' => 50, 'district_name' => 'Thành phố Sóc Trăng'],
            ['province_id' => 50, 'district_name' => 'Huyện Châu Thành'],
            ['province_id' => 50, 'district_name' => 'Huyện Kế Sách'],
            ['province_id' => 50, 'district_name' => 'Huyện Long Phú'],
            ['province_id' => 50, 'district_name' => 'Huyện Mỹ Tú'],
            ['province_id' => 50, 'district_name' => 'Huyện Thạnh Trị'],
            ['province_id' => 50, 'district_name' => 'Huyện Trần Đề'],
            ['province_id' => 50, 'district_name' => 'Huyện Ngọc Hiển'],
            ['province_id' => 50, 'district_name' => 'Huyện Vĩnh Châu'],
            // Sơn La
            ['province_id' => 51, 'district_name' => 'Thành phố Sơn La'],
            ['province_id' => 51, 'district_name' => 'Huyện Bắc Yên'],
            ['province_id' => 51, 'district_name' => 'Huyện Mai Sơn'],
            ['province_id' => 51, 'district_name' => 'Huyện Mộc Châu'],
            ['province_id' => 51, 'district_name' => 'Huyện Sông Mã'],
            ['province_id' => 51, 'district_name' => 'Huyện Sốp Cộp'],
            ['province_id' => 51, 'district_name' => 'Huyện Yên Châu'],
            ['province_id' => 51, 'district_name' => 'Huyện Phù Yên'],
            ['province_id' => 51, 'district_name' => 'Huyện Vân Hồ'],

            // Tây Ninh
            ['province_id' => 52, 'district_name' => 'Thành phố Tây Ninh'],
            ['province_id' => 52, 'district_name' => 'Huyện Bến Cầu'],
            ['province_id' => 52, 'district_name' => 'Huyện Châu Thành'],
            ['province_id' => 52, 'district_name' => 'Huyện Dương Minh Châu'],
            ['province_id' => 52, 'district_name' => 'Huyện Gò Dầu'],
            ['province_id' => 52, 'district_name' => 'Huyện Tân Biên'],
            ['province_id' => 52, 'district_name' => 'Huyện Tân Châu'],

            // Thái Bình
            ['province_id' => 53, 'district_name' => 'Thành phố Thái Bình'],
            ['province_id' => 53, 'district_name' => 'Huyện Đông Hưng'],
            ['province_id' => 53, 'district_name' => 'Huyện Hưng Hà'],
            ['province_id' => 53, 'district_name' => 'Huyện Kiến Xương'],
            ['province_id' => 53, 'district_name' => 'Huyện Quỳnh Phụ'],
            ['province_id' => 53, 'district_name' => 'Huyện Thái Thụy'],
            ['province_id' => 53, 'district_name' => 'Huyện Tiền Hải'],
            ['province_id' => 53, 'district_name' => 'Huyện Vũ Thư'],

            // Thái Nguyên
            ['province_id' => 54, 'district_name' => 'Thành phố Thái Nguyên'],
            ['province_id' => 54, 'district_name' => 'Huyện Định Hóa'],
            ['province_id' => 54, 'district_name' => 'Huyện Đồng Hỷ'],
            ['province_id' => 54, 'district_name' => 'Huyện Phú Bình'],
            ['province_id' => 54, 'district_name' => 'Huyện Phú Lương'],
            ['province_id' => 54, 'district_name' => 'Huyện Võ Nhai'],
            ['province_id' => 54, 'district_name' => 'Huyện Đại Từ'],

            // Thanh Hóa
            ['province_id' => 55, 'district_name' => 'Thành phố Thanh Hóa'],
            ['province_id' => 55, 'district_name' => 'Huyện Bỉm Sơn'],
            ['province_id' => 55, 'district_name' => 'Huyện Cẩm Thủy'],
            ['province_id' => 55, 'district_name' => 'Huyện Đồng Sơn'],
            ['province_id' => 55, 'district_name' => 'Huyện Hà Trung'],
            ['province_id' => 55, 'district_name' => 'Huyện Hậu Lộc'],
            ['province_id' => 55, 'district_name' => 'Huyện Lang Chánh'],
            ['province_id' => 55, 'district_name' => 'Huyện Mường Lát'],
            ['province_id' => 55, 'district_name' => 'Huyện Ngọc Lặc'],
            ['province_id' => 55, 'district_name' => 'Huyện Như Thanh'],
            ['province_id' => 55, 'district_name' => 'Huyện Như Xuân'],
            ['province_id' => 55, 'district_name' => 'Huyện Thạch Thành'],
            ['province_id' => 55, 'district_name' => 'Huyện Tĩnh Gia'],
            ['province_id' => 55, 'district_name' => 'Huyện Vĩnh Lộc'],
            ['province_id' => 55, 'district_name' => 'Huyện Yên Định'],

            // Thừa Thiên Huế
            ['province_id' => 56, 'district_name' => 'Thành phố Huế'],
            ['province_id' => 56, 'district_name' => 'Huyện A Lưới'],
            ['province_id' => 56, 'district_name' => 'Huyện Bình Điền'],
            ['province_id' => 56, 'district_name' => 'Huyện Phong Điền'],
            ['province_id' => 56, 'district_name' => 'Huyện Hương Trà'],
            ['province_id' => 56, 'district_name' => 'Huyện Hương Thủy'],
            ['province_id' => 56, 'district_name' => 'Huyện Quảng Điền'],
            // Tiền Giang
            ['province_id' => 57, 'district_name' => 'Thành phố Mỹ Tho'],
            ['province_id' => 57, 'district_name' => 'Huyện Châu Thành'],
            ['province_id' => 57, 'district_name' => 'Huyện Cái Bè'],
            ['province_id' => 57, 'district_name' => 'Huyện Gò Công Đông'],
            ['province_id' => 57, 'district_name' => 'Huyện Gò Công Tây'],
            ['province_id' => 57, 'district_name' => 'Huyện Tân Phước'],
            ['province_id' => 57, 'district_name' => 'Huyện Cai Lậy'],
            ['province_id' => 57, 'district_name' => 'Huyện Phú Nhuận'],

            // Trà Vinh
            ['province_id' => 58, 'district_name' => 'Thành phố Trà Vinh'],
            ['province_id' => 58, 'district_name' => 'Huyện Càng Long'],
            ['province_id' => 58, 'district_name' => 'Huyện Tiểu Cần'],
            ['province_id' => 58, 'district_name' => 'Huyện Trà Cú'],
            ['province_id' => 58, 'district_name' => 'Huyện Châu Thành'],
            ['province_id' => 58, 'district_name' => 'Huyện Duyên Hải'],
            ['province_id' => 58, 'district_name' => 'Huyện Ngãi Sành'],

            // Tuyên Quang
            ['province_id' => 59, 'district_name' => 'Thành phố Tuyên Quang'],
            ['province_id' => 59, 'district_name' => 'Huyện Chiêm Hóa'],
            ['province_id' => 59, 'district_name' => 'Huyện Hàm Yên'],
            ['province_id' => 59, 'district_name' => 'Huyện Na Hang'],
            ['province_id' => 59, 'district_name' => 'Huyện Sơn Dương'],
            ['province_id' => 59, 'district_name' => 'Huyện Yên Sơn'],

            // Vĩnh Long
            ['province_id' => 60, 'district_name' => 'Thành phố Vĩnh Long'],
            ['province_id' => 60, 'district_name' => 'Huyện Bình Minh'],
            ['province_id' => 60, 'district_name' => 'Huyện Long Hồ'],
            ['province_id' => 60, 'district_name' => 'Huyện Mang Thít'],
            ['province_id' => 60, 'district_name' => 'Huyện Vũng Liêm'],
            ['province_id' => 60, 'district_name' => 'Huyện Tam Bình'],
            ['province_id' => 60, 'district_name' => 'Huyện Trà Ôn'],

            // Vĩnh Phúc
            ['province_id' => 61, 'district_name' => 'Thành phố Vĩnh Yên'],
            ['province_id' => 61, 'district_name' => 'Huyện Bình Xuyên'],
            ['province_id' => 61, 'district_name' => 'Huyện Lập Thạch'],
            ['province_id' => 61, 'district_name' => 'Huyện Tam Dương'],
            ['province_id' => 61, 'district_name' => 'Huyện Vĩnh Tường'],
            ['province_id' => 61, 'district_name' => 'Huyện Yên Lạc'],

            // Yên Bái
            ['province_id' => 62, 'district_name' => 'Thành phố Yên Bái'],
            ['province_id' => 62, 'district_name' => 'Huyện Lục Yên'],
            ['province_id' => 62, 'district_name' => 'Huyện Mù Cang Chải'],
            ['province_id' => 62, 'district_name' => 'Huyện Văn Chấn'],
            ['province_id' => 62, 'district_name' => 'Huyện Văn Yên'],
            ['province_id' => 62, 'district_name' => 'Huyện Trấn Yên'],
            ['province_id' => 62, 'district_name' => 'Huyện Yên Bình'],

            // Phú Yên
            ['province_id' => 63, 'district_name' => 'Thành phố Tuy Hòa'],
            ['province_id' => 63, 'district_name' => 'Huyện Đồng Xuân'],
            ['province_id' => 63, 'district_name' => 'Huyện Tuy An'],
            ['province_id' => 63, 'district_name' => 'Huyện Sông Hinh'],
            ['province_id' => 63, 'district_name' => 'Huyện Phú Hòa'],
            ['province_id' => 63, 'district_name' => 'Huyện Tây Hòa'],
            ['province_id' => 63, 'district_name' => 'Huyện Sơn Hòa'],
            ['province_id' => 63, 'district_name' => 'Huyện Đông Hòa'],

        ];

        DB::table('location_districts')->insert($districts);
    }
}
