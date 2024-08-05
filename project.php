<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class project extends Seeder
{
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'name' => 'tây du kí',
                'description' => 'khỉ và đường tăng',
                'parent_id' => 'sách thiếu nhi',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'dế mèn tây du ki',
                'description' => 'dế mèn bị khinh thươờng và cái kết',
                'parent_id' => 'sách thiếu nhi',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Alice ở xứ sở diệu kỳ',
                'description' => 'alice thành alicu',
                'parent_id' => 'sách thiếu nhi',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Không gia đình ',
                'description' => 'mồ côi',
                'parent_id' => 'sách thiếu nhi',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Charlie và nhà máy Sô-cô-la ',
                'description' => 'ăn may có socola',
                'parent_id' => 'sách thiếu nhi',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Lịch Sử Chiến Tranh',
                'description' => 'Chiến tranh thế giới từ xưa tới nay',
                'parent_id' => 'sách lịch sử',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Lịch Sử Do Thái',
                'description' => 'DO thái thiêu đốt',
                'parent_id' => 'sách lịch sử',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Đại Việt Sử Ký Toàn Thư',
                'description' => 'đại việt thành đại ngu',
                'parent_id' => 'sách lịch sử',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Súng, Vi Trùng Và Thép.',
                'description' => 'lịch sử thời súng',
                'parent_id' => 'sách lịch sử',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Việt Nam Sử Lược',
                'description' => 'lịch sử thời việt nam',
                'parent_id' => 'sách lịch sử',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Shoe Dog',
                'description' => 'chó trong shoe',
                'parent_id' => 'sách tiểu sử',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'The everything store',
                'description' => 'cái shop có tất cả',
                'parent_id' => 'sách tiểu sử',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Elon musk',
                'description' => 'cuộc đời của elon musk',
                'parent_id' => 'sách tiểu sử',
                'content' => 'sách hay',
                'active' => '1'
            ],
            [
                'name' => 'Steve jobs',
                'description' => 'cuộc đời của steve jobs',
                'parent_id' => 'sách tiểu sử',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'chất Michalle',
                'description' => 'cuộc đời của Michalle',
                'parent_id' => 'sách tiểu sử',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Quyền lực',
                'description' => 'kinh nghiệm thực te',
                'parent_id' => 'sách tâm lí',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Phi lý trí',
                'description' => 'lý tr tốt nâng khả năng',
                'parent_id' => 'sách tâm lí',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Bản Chất Của Dối Trá',
                'description' => 'tìm cái dối trá',
                'parent_id' => 'sách tâm lí',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Nghịch Lý Của Sự Lựa Chọn',
                'description' => 'luựa chọn tốt nhất',
                'parent_id' => 'sách tâm lí',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Đi Tìm Lẽ Sống ',
                'description' => 'Lẽ sống tốt nhất',
                'parent_id' => 'sách tâm lí',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Piercing ',
                'description' => 'truyện xoay quanh sự kinh dị của con chim',
                'parent_id' => 'sách kinh dị',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Tấm Vải Đỏ ',
                'description' => 'Kinh dị vải',
                'parent_id' => 'sách kinh dị',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Địa Ngục Tầng Thứ 19. ',
                'description' => 'địa ngục kinh khủng',
                'parent_id' => 'sách kinh dị',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Kỳ Án Ánh Trăng.',
                'description' => 'ánh trăng chết chóc',
                'parent_id' => 'sách kinh dị',
                'content' => 'sach hay',
                'active' => '1'
            ],
            [
                'name' => 'Người Tìm Xác ',
                'description' => 'người giết người ',
                'parent_id' => 'sách kinh dị',
                'content' => 'sach hay',
                'active' => '1'
            ]
        ]);

        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
