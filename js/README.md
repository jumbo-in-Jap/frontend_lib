##  handlebars sample
```
var source   = $("#lid").html();
var template = Handlebars.compile(source);
$(".target_class").prepend(template(list));

<script id="list-fromAPI-template" type="text/x-handlebars-template">
<div class="list_area" style="display:none;">
            <div class="list" >
                 <div class="content"  val1="{{listId}}" val2="{{contentUrl}}">
                    <!-- <iframe src="{{card_content_url}}" alt="" id="sample_img" frameborder="0" allowfullscreen ></iframe> -->
                    <img src="{{thumbnailUrl}}" alt="">
                 </div>
                <div class="" >
                    <span class="description">{{title}}</span>
                    <span class="text">を見ました</span>
                    <div class="time">{{time}}</div>
                    <div class="separater"></div>
                    <div class="search_section">
                        <span class="search_head">調べる：</span>
                        {{#each words}}
                        <span class="search_word">{{this}}</span>
                        {{/each}}
                    </div>
</script>
```

## Ajax Wrapper
httpRequest.get(reqUrl,"json",obj,successFunc);


