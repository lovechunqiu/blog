my_laravel
<?php echo $data['name'];?>
<?php echo $data['kouhao'];?>
<?php echo $title;?>
{{$title}} @{{$title}}
{{$title or 'Default'}}
{{isset($titlee) ? $titlee : 'Default'}}
{!! $title !!}


@if($data['score']<60)
不及格
@else
及格
@endif

@unless($data['score'] > 60)
不及格
@endunless

@for($i=0;$i<$data['num'];$i++)
{{$i}}<br>
@endfor

@foreach($data['article'] as $v)
{{$v}}<br>
@endforeach

@forelse($data['article'] as $v)
{{$v}}<br>
@empty
没有数据
@endforelse
