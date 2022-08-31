<?= $this->extend('templates\highStar_temp') ?>

<?= $this->section('head_info') ?>
    <title>大學甄選入學委員會-查看公告</title>
    <style>
        .newline { 
            word-wrap:break-word;
            white-space: pre-wrap;
        }
    </style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="pt-2 pb-3 mx-lg-5 mx-md-3">
        <div class="container d-flex flex-wrap justify-content-start">
            <span class="fs-3">訊息公告 - <?php echo $posts['category'] ?></span>
        </div>
    </div>
    <div class="border-top"></div>

    <div class="px-4 py-4 my-0 text-center">
       
        <h3 class="newline fw-bold"><?php echo $posts['title'] ?></h3>
        <div class="col-lg-10 mx-auto">
            <div class="newline mb-4"><?php echo $posts['content'] ?></div>
            <?php
            if($posts['file']==NULL)
            {
                echo "<p>上傳檔案 : 此貼文無檔案</p>";
            }
            else
            {   $path =  '/File/'.$posts["file_name"].'/'.$posts["file"];
                echo '<span>上傳檔案 : </span>';
                echo '<a href ="'.$path.'" download = '.$posts["file"].' class="text-decoration-none">
                        '.$posts["file"].'
                     </a>
                     ';
            }
            ?>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-3">
                <p class="px-4 me-sm-3">發布日期 : <?php echo $posts['dateStart'] ?></p>
                <p class="px-4">更新日期 : <?php echo substr($posts['update'], 0, 10) ?></p>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>