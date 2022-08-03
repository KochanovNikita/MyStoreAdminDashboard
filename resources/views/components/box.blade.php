@props(['count', 'title', 'color', 'link'])

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box {{ $color }}">
        <div class="inner">
            <h3>{{ $count }}</h3>

            <p>{{ $title }}</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="{{$link}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
