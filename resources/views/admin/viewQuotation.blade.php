@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center" style="border:black"> 
            <table class="table table-striped table-hover" style="width:65%">
    
        <thead>
        <tr>
            <th>Team</th>
            <th>Operation</th>
            <th>Details</th>
            <th></th>
        </tr>
        </thead>
        <tbody id="myTable">
        
        @foreach($quotation as $quot) 
        <tr>
             <td>{{$quotation['team_id']}}</td>
             <td><a href="" class="button">View<a></td>
             <td class="td11">
                    @foreach($display as $mat)
                        {{$mat[0]}} {{$mat[1]}} {{$mat[2]}}
                    @endforeach
            </td>
            <td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="d-flex justify-content-center">
        <a href="/editQuotation" class="button">Add/Edit Material</a>
    </div>
    
@endsection

{{-- 
<div id="most_viewed_bars-2" class="widget widget_most_viewed_bars"><p class="widget-title">Most Popular</p><ul class="popular_posts_bars most_viewed_bars"><li class="popular_posts_bars_li popular_posts_bars_color_red"><a href="https://html.com/tags/comment-tag/" class="popular_posts_bars_link">HTML Comments: How To Use Them In Your HTML Code</a><span class="popular_posts_bars_comment_count_hold"><a href="https://html.com/tags/comment-tag/#comments" class="popular_posts_bars_comment_count">1,319 views</a><span class="popular_posts_bars_comment_count_triangle"></span></span></li><li class="popular_posts_bars_li popular_posts_bars_color_orange"><a href="https://html.com/attributes/a-target/" class="popular_posts_bars_link">How To Use The &lt;a&gt; To Make Links &amp; Open Them Where You Want!</a><span class="popular_posts_bars_comment_count_hold"><a href="https://html.com/attributes/a-target/#comments" class="popular_posts_bars_comment_count">1,094 views</a><span class="popular_posts_bars_comment_count_triangle"></span></span></li><li class="popular_posts_bars_li popular_posts_bars_color_yellow"><a href="https://html.com/attributes/img-src/" class="popular_posts_bars_link">How To Use  In HTML</a><span class="popular_posts_bars_comment_count_hold"><a href="https://html.com/attributes/img-src/#comments" class="popular_posts_bars_comment_count">1,045 views</a><span class="popular_posts_bars_comment_count_triangle"></span></span></li><li class="popular_posts_bars_li popular_posts_bars_color_green"><a href="https://html.com/blog/100-places-post-share-photos-online/" class="popular_posts_bars_link">How To Share Your Pictures Online: 100+ Image Hosting Tools</a><span class="popular_posts_bars_comment_count_hold"><a href="https://html.com/blog/100-places-post-share-photos-online/#comments" class="popular_posts_bars_comment_count">1,027 views</a><span class="popular_posts_bars_comment_count_triangle"></span></span></li><li class="popular_posts_bars_li popular_posts_bars_color_blue"><a href="https://html.com/attributes/body-background/" class="popular_posts_bars_link">How To Use  To Specify A Background Image</a> --}}