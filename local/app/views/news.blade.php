@extends('layouts.main') 
@section('content')

            <br><br><br><br><br><br>
            
            <div class="container">
            <?php
                foreach ($news as $item) {
            ?>
                        <div class="section-title">
                            <h2><?php echo $item->title ?></h2>
                            <span class="badge">Posted <?php echo date("d F Y", strtotime($item->date)) ?></span>
                            <div class="line">
                                <hr style="border-color:#FFF">
                            </div>
                            <div class="clearfix"></div>
                            <div style="font-size: larger;color: #6F6F6F;">
                                <div class="text-justify">
                                    <?php echo $item->news ?><br>
                                </div>
                            </div>
                        </div>
            <?php
                }
            ?>
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
        </div>
        
        <br><br>
     

@endsection