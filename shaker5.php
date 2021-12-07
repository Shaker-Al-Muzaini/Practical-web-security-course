<?php
include_once('bot.php');
include_once('cone.php');
?>
 <div class="container">
        <hr class="hr2">
        </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                            <tr>

                                <th>ID</th>
                                <th>username</th>
                                <th>password</th>
                                <th>EDIT</th>
                                                </tr>
<?php
                            $limit = 2;
                            $page = (!empty($_GET['page'])) ? $_GET['page']:1;
                            $offset = ($page - 1) * $limit;
                            $sql="select username,id,pas from csrf ";//limit $limit offset $offset ";
                            $reslt = mysqli_query($cone,$sql);
                            if(mysqli_num_rows($reslt)>0 ){
                                while ($ros=mysqli_fetch_assoc($reslt)){
                                    echo
                                        '<tr>'.'<td>'.$ros['id'].'</td>'
                                        .'<td>'.$ros['username'].'</td>'
                                        .'<td>'.$ros['pas'].'</td>'.
                                        '<td>'.'<a href="shaker3.php?id='.$ros['id'].'">'.'<button type="button" class="btn btn-success">Edit</button>'.'</a>'.'</td>'.
                                        '<input type="hidden" name="id" value="'.$ros['id'].'">  
                                                            </form>'.'</td>'.
                                        ' </tr>' ;

                                }
                            }
                            ?>
                    </table>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <?php
                                    $limit = 4;
                                    $count_query = "select count(id) as rows_no from csrf";
                                    $count_result = mysqli_query($cone, $count_query);
                                    $count_row = mysqli_fetch_assoc($count_result);
                                    $rows_no = $count_row['rows_no'];
                                    $pages = ceil($rows_no / $limit);
                                    echo '<nav aria-label="Page navigation example">'.
                                        '<ul class="pagination">';
                                    for ($i = 1 ; $i <= $pages ; $i++) {
                                        echo '<li class="page-item"><a href="?page='. $i .'" class="page-link">' . $i .  '</a></li>';
                                    }
                                    echo'<li class="page-item"><a class="page-link" href="?page=1">Next</a></li>';
                                    echo '</ul>' .'</nav>';

                                    mysqli_close($cone);
                                   ?>
                                </div>
                            </div>
                        </div>
                    </div>
