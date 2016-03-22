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
                                <hr>
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
            <div style="width:100%; text-align:center;">
                <?php
                    echo '<a style="color:black; margin-left:10px;" href="'.URL::to('/').'/news/1"> << </a>';
                    echo '<a style="color:black; margin-left:10px;" href="'.URL::to('/').'/news/'.($id - 1).'"> < </a>';
                    for($i=1; $i<=10; $i++){
                        echo '<a style="color:'.($i == $id ? "blue" : "black").'; margin-left:10px;" href="'.URL::to('/').'/news/'.$i.'">'.$i.'</a>';
                    }
                    echo '<a style="color:black; margin-left:10px;" href="'.URL::to('/').'/news/'.($id + 1).'"> > </a>';
                    echo '<a style="color:black; margin-left:10px;" href="'.URL::to('/').'/news/10"> >> </a>';
                    
                ?>

            </div>
        </div>
        
        <br><br>
     

@endsection