/* $Id: compare.js 15469 2008-12-19 06:34:44Z testyang $ */


var Compare = new Object();

Compare = {
  add : function(goodsId, goodsName, type)
  {
    var count = 0;
    for (var k in this.data)
    {
      if (typeof(this.data[k]) == "function")
      continue;
      if (this.data[k].t != type) {
        alert(goods_type_different.replace("%s", goodsName));
        return;
      }
      count++;
    }

    if (this.data[goodsId])
    {
      alert(exist.replace("%s",goodsName));
      return;
    }
    else
    {
      this.data[goodsId] = {n:goodsName,t:type};
    }
    this.save();
    this.init();
  },
  relocation : function()
  {
    if (this.compareBox.style.display != "") return;
    var diffY = Math.max(document.documentElement.scrollTop,document.body.scrollTop);

    var percent = .2*(diffY - this.lastScrollY);
    if(percent > 0)
      percent = Math.ceil(percent);
    else
      percent = Math.floor(percent);
    this.compareBox.style.top = parseInt(this.compareBox.style.top)+ percent + "px";

    this.lastScrollY = this.lastScrollY + percent;
  },
  init : function(){
    this.data = new Object();
    var cookieValue = document.getCookie("compareItems");
    if (cookieValue != null) {
      this.data = $.evalJSON(cookieValue);
    }
    /*if (!this.compareBox)
    {
      this.compareBox = document.createElement("DIV");
      var submitBtn = document.createElement("INPUT");
      this.compareList = document.createElement("UL");
      this.compareBox.id = "compareBox";
      this.compareBox.style.display = "none";
      this.compareBox.style.top = "200px";
      this.compareBox.align = "center";
      this.compareList.id = "compareList";
      submitBtn.type = "button";
      submitBtn.value = button_compare;
			this.compareBox.appendChild(this.compareList);
      this.compareBox.appendChild(submitBtn);
      submitBtn.onclick = function() {
        var cookieValue = document.getCookie("compareItems");
        var obj = $.evalJSON(cookieValue);
        var url = document.location.href;
        url = url.substring(0,url.lastIndexOf('/')+1) + "compare.php";
        var i = 0;
        for(var k in obj)
        {
          if(typeof(obj[k])=="function")
          continue;
          if(i==0)
            url += "?goods[]=" + k;
          else
            url += "&goods[]=" + k;
          i++;
        }
        if(i<2)
        {
          alert(compare_no_goods);
          return ;
        }
        document.location.href = url;
      }
      document.body.appendChild(this.compareBox);
    }*/
	this.compareBox = $("#pop-compare");
    //this.compareList.innerHTML = "";
    var self = this;
    for (var key in this.data)
    {
      if(typeof(this.data[key]) == "function")
        continue;
      /*
	  var li = document.createElement("LI");
      var span = document.createElement("SPAN");
      span.style.overflow = "hidden";
      span.style.width = "100px";
      span.style.height = "20px";
      span.style.display = "block";
      span.innerHTML = this.data[key].n;
      li.appendChild(span);
      li.style.listStyle = "none";
      var delBtn = document.createElement("IMG");
      delBtn.src = "themes/default/images/drop.gif";
      delBtn.className = key;
      delBtn.onclick = function(){
        document.getElementById("compareList").removeChild(this.parentNode);
        delete self.data[this.className];
        self.save();
        self.init();
      }
	  */
      //li.insertBefore(delBtn,li.childNodes[0]);
      //this.compareList.appendChild(li);
	  item = $("#diff-items").find("dl.item-empty")[0];
	  item_dd = $(item).find("dd")[0];
	  $(item_dd).html(this.data[key].n+"<a class='del-comp-item' onclick='Compare._delete_item("+item+");'>删除</a>");
	  $(item).removeClass("item-empty").addClass("hasItem");
	  $("#goto-contrast").unbind("click").bind("click", function(){
			var cookieValue = document.getCookie("compareItems");
			var obj = $.evalJSON(cookieValue);
			var url = document.location.href;
			url = url.substring(0,url.lastIndexOf('/')+1) + "compare.php";
			var i = 0;
			for(var k in obj)
			{
			  if(typeof(obj[k])=="function")
			  continue;
			  if(i==0)
				url += "?goods[]=" + k;
			  else
				url += "&goods[]=" + k;
			  i++;
			}
			if(i<2)
			{
			  alert(compare_no_goods);
			  return ;
			}
			document.location.href = url;
	  });
    }
    if ($("#diff-items").find("dl.hasItem").length > 0)
    {
      $("#pop-compare").show();
      //this.timer = window.setInterval(this.relocation.bind(this), 50);
    }
    else
    {
      $("#pop-compare").hide();
      //window.clearInterval(this.timer);
      this.timer = 0;
    }
  },
  _delete_item : function(item) {
	$(item).removeClass('hasItem').addClass('item-empty');
	$($(item).find("dd")[0]).html("您还可以继续添加");
  },
  save : function()
  {
    var date = new Date();
    date.setTime(date.getTime() + 99999999);
    //document.setCookie("compareItems", this.data.toJSONString());
	//document.setCookie("compareItems", this.data.toJSON());
	document.setCookie("compareItems", $.toJSON(this.data));
  },
  lastScrollY : 0
}