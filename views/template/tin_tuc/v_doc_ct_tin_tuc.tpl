{extends file="layout/masterSanPham.tpl"}
{block name='content'}
<div class="pageWrap">

    <div class="section-banner">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Our Blog</li>
            </ul>
        </div>
    </div><!-- /section-banner -->
 {if $CTTin}
            {foreach $CTTin as $tt}
            {$array[]=$tt}
            {/foreach}
            {/if}
    <section class="section-compact">
        <div class="container">
            <header class="heading-3 page-heading">
                <h4>{$array['1']}</h4>
            </header>
           
            <div class="row">

                <div class="col-md-9">


                    <div class="blog-box blog-box-single">
                        <figure class="image image-zoom">
                            <img src="{$path}public/images/resource/img-27.jpg" alt="image">
                            <div class="post-date">
                                <span>21</span>apr
                            </div>
                        </figure>
                        <div class="blog-text">
                            <h3><a href="blog-single.html"></a></h3>
                            <p>{$array['4']}</p>

                            <div class="blog-bottom-bar">
                                <p class="posted">Posted By: {$array['7']}<a href="#" class="text-primary">Darran Quote</a></p>
                                <ul class="meta-list">
                                    <li><a href="#"><i class="flaticon-live2"></i>21 comments</a></li>
                                    <li><a href="#"><i class="flaticon-heart264"></i>12 likes</a></li>
                                    <li><a href="#"><i class="flaticon-tag31"></i>adventure, romance</a></li>
                                </ul>
                            </div><!-- /blog-bottom-bar -->

                            <div class="action-bar">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#" class="go-back"><i class="flaticon-arrow83"></i>Previous Posts</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#" class="go-forward">Next Posts <i class="flaticon-arrow89"></i></a>
                                    </div>
                                </div>
                            </div><!-- /action-bar -->

                        </div><!-- /blog-text -->
                    </div><!-- /blog-box -->

                    <div class="author-box">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/resource/snap-2.jpg" alt="alt">
                                <div class="edit-info">
                                    <i class="glyphicon glyphicon glyphicon-edit"></i>
                                    30 posts
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Author - Karen Dawson</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived </p>
                            </div>
                        </div>
                    </div><!-- /author-box -->

                    <div class="comments-area">
                        <h4>Reviews</h4>
                        <ul class="comments-list">
                            <li>
                                <div class="comment-box">
                                    <div class="media">
                                        <div class="media-left">
                                            <img class="media-object" src="images/resource/snap-3.jpg" alt="alt">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Dana James</a></h4>
                                            <p class="comment-date">Apr, 21, 2015</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took.</p>
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>
                                </div><!-- /comment-box -->
                                
                                <ul>
                                    <li>
                                        <div class="comment-box">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object" src="images/resource/snap-4.jpg" alt="alt">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Veronica Blunt</a></h4>
                                                    <p class="comment-date">Apr, 22, 2015</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took.</p>
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </div>
                                        </div><!-- /comment-box -->
                                    </li>
                                    
                                </ul>

                            </li>
                            <li>
                                <div class="comment-box">
                                    <div class="media">
                                        <div class="media-left">
                                            <img class="media-object" src="images/resource/snap-5.jpg" alt="alt">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Marie Ann Jhonson</a></h4>
                                            <p class="comment-date">Apr, 20, 2015</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took.</p>
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>
                                </div><!-- /comment-box -->
                            </li>
                        </ul>
                    </div><!-- /comments-area -->
                    
                    <div class="comments-area">
                        <h4>Post a Comment</h4>
                        <form action="#" method="post" class="comment-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label>Your Email</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="col-sm-12">
                                    <label>Your Message</label>
                                    <textarea class="form-control" placeholder="write message here"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-default" value="Send">
                                </div>
                            </div>
                        </form>
                    </div><!-- /comments-area -->

                </div>

                <div class="col-md-3">
                    <div class="widget widget-search-site">
                        <header class="widget-heading-4">
                            <h4>Search Stories</h4>
                        </header>
                        <form action="#" method="post" class="search-widget-form">
                            <input type="search" class="form-control" placeholder="">
                            <input type="submit" value="go">
                        </form>
                    </div><!-- /widget-search-site -->

                    <div class="widget widget-tabular">
                        <ul class="widget-tab-head">
                            <li><a data-toggle="tab" href="#widget-recent">Recent</a></li>
                            <li class="active"><a data-toggle="tab" href="#widget-popular" aria-expanded="true">Popular</a></li>
                            <li><a data-toggle="tab" href="#widget-new" aria-expanded="true">New</a></li>
                        </ul>
                        <div class="widget-tabular-content tab-content">
                            <div id="widget-recent" class="tab-pane fade">
                                <div class="media">
                                  <div class="media-left">
                                    <a href="#"><img class="media-object" src="images/resource/img-32.jpg" alt="image"></a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">Lilac Perfumes for Spring</a></h5>
                                    <p>Lorem ipsum dolor sit amet...</p>
                                </div>
                            </div><!-- /media -->
                            <div class="media">
                              <div class="media-left">
                                <a href="#"><img class="media-object" src="images/resource/img-33.jpg" alt="image"></a>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="#">Throw open the windows</a></h5>
                                <p>Lorem ipsum dolor sit amet...</p>
                            </div>
                        </div><!-- /media -->
                    </div><!-- /tab-pane -->

                    <div id="widget-popular" class="tab-pane fade in active">
                        <div class="media">
                          <div class="media-left">
                            <a href="#"><img class="media-object" src="images/resource/img-31.jpg" alt="image"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading"><a href="#">Martin Margiela Replica</a></h5>
                            <p>Lorem ipsum dolor sit amet...</p>
                        </div>
                    </div><!-- /media -->
                    <div class="media">
                      <div class="media-left">
                        <a href="#"><img class="media-object" src="images/resource/img-32.jpg" alt="image"></a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading"><a href="#">Lilac Perfumes for Spring</a></h5>
                        <p>Lorem ipsum dolor sit amet...</p>
                    </div>
                </div><!-- /media -->
                <div class="media">
                  <div class="media-left">
                    <a href="#"><img class="media-object" src="images/resource/img-33.jpg" alt="image"></a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading"><a href="#">Throw open the windows</a></h5>
                    <p>Lorem ipsum dolor sit amet...</p>
                </div>
            </div><!-- /media -->
        </div><!-- /tab-pane -->

        <div id="widget-new" class="tab-pane fade">
            <div class="media">
              <div class="media-left">
                <a href="#"><img class="media-object" src="images/resource/img-33.jpg" alt="image"></a>
            </div>
            <div class="media-body">
                <h5 class="media-heading"><a href="#">Throw open the windows</a></h5>
                <p>Lorem ipsum dolor sit amet...</p>
            </div>
        </div><!-- /media -->
    </div><!-- /tab-pane -->
</div>
</div><!-- /widget-search-site -->





</div>

</div>

</div>
</section>









</div><!-- /pageWrap -->
{/block}