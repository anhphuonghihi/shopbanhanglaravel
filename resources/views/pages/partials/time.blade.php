@php
    date_default_timezone_set('Asia/Ho_Chi_MinH');
    $date1 = new DateTime('now');
    $vietnamese_days = ['Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', 'Chủ Nhật'];

    $diff = $date2->diff($date1);

    if ($diff->y) {
        # code...
        echo $date2->format('d');
        echo '/';
        echo $date2->format('m');
        echo '/';
        echo $date2->format('y');
    } elseif ($diff->m < 1) {
        $hours = $diff->h;

        $hours = $hours + $diff->days * 24;
        $hour_week = 24 * 7;
        $thu = $date2->format('N');

        if ($hour_week > $hours) {
            if ($hours < 48) {
                if ($hours < 12) {
                    if ($hours == 0) {
                        if ($hours == 0) {
                            echo $diff->s;
                            echo ' giây trước';
                        } else {
                            echo $diff->i;
                            echo ' phút trước';
                        }
                    } else {
                        echo 'Hôm nay, lúc ';
                        echo $date2->format('H');
                        echo ':';
                        echo $date2->format('i');
                    }
                } elseif ($hours < 24) {
                    if ($date2->format('a') == 'pm') {
                        echo 'Hôm qua, lúc ';
                        echo $date2->format('H');
                        echo ':';
                        echo $date2->format('i');
                    } else {
                        echo 'Hôm nay, lúc ';
                        echo $date2->format('H');
                        echo ':';
                        echo $date2->format('i');
                    }
                } else {
                    echo 'Hôm qua, lúc ';
                    echo $date2->format('H');
                    echo ':';
                    echo $date2->format('i');
                }
            } else {
                echo $vietnamese_days[$thu];
                echo ' lúc ';
                echo $date2->format('H');
                echo ':';
                echo $date2->format('i');
            }
        } else {
            echo $date2->format('d');
            echo '/';
            echo $date2->format('m');
        }
    } else {
        echo $date2->format('d');
        echo '/';
        echo $date2->format('m');
    }
@endphp
