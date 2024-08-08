<a href="" class="labelLink" rel="nofollow">
    @foreach ($listnhan as $key => $listnhan_item)
        <span
            class="label label--@php $nhan = DB::table('tbl_tag')->where('name', '=', $listnhan_item)->where('la_label', '=', '1')->get(); 
if($nhan->count()>0){
    echo $nhan[0]->color;
} else{
    echo 'green';
} @endphp"
            dir="auto">
            {{ $listnhan_item }}
        </span>
    @endforeach
</a>
