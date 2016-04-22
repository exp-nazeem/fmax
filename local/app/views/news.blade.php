@extends('layouts.main') 
@section('content')

            <br><br><br><br><br><br>
            
            <div class="container">
            @foreach ($news as $item)
                <div class="section-title">
                    <?php 
                     $linkhref = preg_replace('/\s+/', '-',  $item->title);
                     $linkhref = '/news/'.$item->id."-".$linkhref;
                    ?>
                    <h2>{{ HTML::link($linkhref, "$item->title")}}</h2>
                    <span class="badge">Posted <?php echo date("d F Y", strtotime($item->date)); ?></span>
                    <div class="line">
                        <hr style="border-color:#FFF">
                    </div>
                    <div class="clearfix"></div>
                    <div style="font-size: larger;color: #6F6F6F;">
                        <div class="text-justify">
                            {{  $item->news }}<br>
                        </div>
                    </div>
                </div>
           @endforeach
           @if ($showPagination == 1)
            <div class="footer-pagination">
                <?php
                    if($id > 1){
                        echo '<a class="links" href="'.URL::to('/').'/news/1"> << </a>';
                        echo '<a class="links" href="'.URL::to('/').'/news/'.($id - 1).'"> < </a>';
                    }
                    for($i=1; $i<=10; $i++){
                        echo '<a class="'.($i == $id ? "links-active" : "links").'" href="'.URL::to('/').'/news/'.$i.'">'.$i.'</a>';
                    }
                    if($id < 10){
                        echo '<a class="links" href="'.URL::to('/').'/news/'.($id + 1).'"> > </a>';
                        echo '<a class="links" href="'.URL::to('/').'/news/10"> >> </a>';
                    }
                ?>
            </div>
            @endif
        </div>
        
        <br><br>
     

@endsection