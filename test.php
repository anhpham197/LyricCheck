<?php
//Enter your code here, enjoy!

$list = ['tôn ngộ không', 'con dân', 'khá phếch', 'have fun', 'beat koi'];
$content ='Ông ơi CV của con đây nhé, con dân chơi hệ đào

Chân tay con nhìn tuy hơi bé, mà có sức mạnh đỉnh cao

Cha ơi! Con nhỏ này vâm phếch, có vẻ cũng được việc

Xem qua qua thì cũng khá phếch, cho nó ra làm luôn

Trong cái xã hội bon chen này, phải làm thì mới có ăn

Cố gắng hết mình, kiếm lấy ít tiền, chăm sóc cho mẹ cha

Ai nói thế nào, ta vẫn cứ đào, tự mình ta have fun

Quyết tiếp bước truyền thống cha ông dậy sớm để thành công

Ba mươi cân “beat koi” vừa được mã hóa đào bao lâu mới xong

Ông đưa cho con tiền công luôn nhá, tất toán hết bảy trăm

Tao đã không kết nối được với kế toán thôi mày cứ từ từ

Hay cứ đi theo ông làm thêm mấy tháng rồi sau ông cho cưới thằng này

Đào đào tiếp, đào cho tới sáng mai

Đào đào nữa, sau còn lấy chồng

Đào đào tiếp, tình yêu không có sai

Đào đào mãi, cố gắng chăm chỉ kiếm lấy tấm chồng

Một hai ba lên

Lên lên luôn

Lên thiên đàng bắt con Hậu Hoàng

Lên lên luôn

Đi nà mộc bắt tôn ngộ không

Lên lên luôn

Lên cà vạt trói em bằng đà lạt

Lên lên luôn

Lên Liễu Giai hiphop never die

Ông ơi con bảo ông này, bao năm vất vả đi cày cho ông

Lời hứa ông còn nhớ không bao giờ ông định gả chồng cho con?

Ừ thì ông nhớ chứ bây, nhưng còn một việc giữ lại phải lo

Mày tìm cây tre thật to dài đúng trăm đốt ông cho cưới liền

Đi nơi đâu tìm tre trăm đốt hay phi lên bờ hồ

Ơ nhưng mà đi đường xa không tốt, vác tre hơi mỏi lưng

Sao ta không bỏ ra mấy lốp, mua luôn cho nhẹ đầu

Money bây giờ là mấu chốt, game dễ thôi bạn ê

Có mấy đốt đẹp sáng mới đốn bình thường tôi bán bốn trăm

Nhưng bán suốt từ sáng vẫn ế

Thôi bán cho triệu hai

Cứ ngỡ có tiền sẽ đỡ phiền cuộc đời sao oái oăm

Thôi xong phen này hết lấy chồng, giờ biết phải làm sao?

Hello How Are you Tại sao con khóc?

Bà đây có khóc đâu

Ơ không khóc thì thôi mình đây xin lỗi giãn cái cơ mặt ra

Tôi đây đang đi kiếm tìm tre trăm đốt

Nhưng tìm mãi không được

Thôi yên tâm đi làm sao phải hốt tầm này tre thì dễ thôi

Dẹp dẹp hết

Này thằng kia tránh ra

Dẹp dẹp hết

Tao còn chống lầy

Dẹp dẹp hết

Tại sao như thế kia?

Dẹp dẹp hết

Bố con nhà này sẽ biết tay bà

Khắc nhập khắc nhập

Khắc xuất khắc xuất tôn ngộ không';
$contentLower = mb_strtolower($content, 'UTF-8');
$checkedWords = array();

foreach ($list as $value) {
    $valueLower = mb_strtolower($value);
    $lastPos = 0;
    $hasValue = false;
    while (($lastPos = strpos($contentLower, $valueLower, $lastPos)) !== false) {
        $hasValue = true;
        $lastPos += strlen($valueLower);
    }
    if ($hasValue == true) {
        array_push($checkedWords, $value);
    }
}
$count = count($checkedWords);
foreach ($checkedWords as $value) {
    echo str_replace($value, "<span style='background: #732828'>$value</span>", $content);

}
