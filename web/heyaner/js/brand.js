// 图片轮播
// 1.获取图片对象组
var img = $('.img');//document.getElementsByTagName('img');
var li = $('.li');//document.getElementsByTagName('li');
// 2. 图片动起来
var i = 0;// 标识符，定义图片的位置
var s = null;// 定时器标识符
// 将图片轮播封装函数
function run(){
s = setInterval(function(){
// 2.1 初始化，让所有的图片全部隐藏,让所有的li的颜色改为红色
for (var j = 0; j < img.length; j++) {
img[j].style.display = 'none';
li[j].style.background = '#999';
}
// 2.2 显示第i张图片,让第i个li改变背景颜色
img[i].style.display = 'block';
li[i].style.background = '#333';
// 2.3 自增
i++;
// 2.4 判断界限
if (i >= img.length) {
i = 0;
}
}, 1500)
}
// 调用函数，让图片轮播
run();
// 3.鼠标移入和移出
for (var m = 0; m < img.length; m++) {
img[m].onmouseover = function(){
// 取消定时任务
clearInterval(s);
}
// 鼠标离开继续运行
img[m].onmouseout = function(){
// 图片继续轮播
run();
}
}
// 4.数字的移入和移出
for (var n = 0; n < li.length; n++) {
li[n].onmouseover = function(){
// 4.1 取消定时任务
clearInterval(s);
// 4.2 初始化(for循环),所有的图片隐藏，所有的li背景颜色改为红色
for (var x = 0; x < img.length; x++) {
img[x].style.display = 'none';
li[x].style.background = '#999';
}
// 鼠标放在那个数字上（找索引值），对应的数字和图片要显示出来
// 4.3 获取当前li的索引值
i = this.getAttribute('data');
// 4.4 根据索引值，让对应的图片显示，让数字的背景颜色改变
img[i].style.display = 'block';
li[i].style.background = '#333';
}
}