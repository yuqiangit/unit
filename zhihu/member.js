/**
 * Created by langlive on 17/4/10.
 *
 * 批量取消关注
 * todo 公众账号关注取消
 * todo 自动翻页触发
 */
var followers = document.getElementsByClassName("UserLink-link");
var start;
var i = 0, len = followers.length;
for (; i < len;) {
    var info = followers[i];
    var str = info.href;
    console.log(str)
    start = str.indexOf('org');
    console.log('**'+start);
    if(start > 0){
        start = 25;
    }else{
        start = str.indexOf('people');
    }

    var person = str.substring(start + 7);
    follow(person);
    i++;
}

function follow(person) {
    var formData = new FormData();
    var xhr = new XMLHttpRequest();
    xhr.timeout = 3000;
    xhr.responseType = "text";
    xhr.open('DELETE', 'https://www.zhihu.com/api/v4/members/'+person+'/followers', true);
    xhr.onload = function (e) {
        if (this.status == 200 || this.status == 304) {
            var data = JSON.parse(this.responseText);
            if (data.code == "100000") {
                // 转发微博成功
                console.log(content);
            } else if (data.code == "100027") {
                // 转发微博失败，需要回答图片验证码的问题
                console.log(data);
            } else {
                // 转发微博失败，其他原因
                console.log(data);
            }
        }
    };
    xhr.send(formData);
}
