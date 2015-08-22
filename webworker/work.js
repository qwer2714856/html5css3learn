var cm = 0;
function counts(){
    var ag = arguments.callee;
    postMessage(Math.abs(++cm));//像主线程发送值
    setTimeout(function(){
        ag();
    },1000)
}
onmessage = function(e){//获取主线线程值
    cm = e.data;
    counts();
}