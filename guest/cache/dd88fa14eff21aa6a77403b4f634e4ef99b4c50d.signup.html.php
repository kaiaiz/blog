<?php
/* Smarty version 3.1.31, created on 2017-10-30 15:25:26
  from "D:\wamp64\www\project\blog\template\index\signup.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f74466335511_90858859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '522530316a901a9b1a352287a0de690fb631353d' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\blog\\template\\index\\signup.html',
      1 => 1509377123,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f74466335511_90858859 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="http://localhost/project/blog/static/index/css/signup.css">
  <style>
    label{
      color: #fff;
      width: 100%;
      margin-bottom: 5px;
      display: inline-block;
      position: relative;
      z-index: 999;
      font-weight: bold;
    }
  </style>
  <script>
    window.addEventListener('DOMContentLoaded',
      function() {
        $('form.con').validate({
          rules:{
            username:{
              required:true,
              minlength:6,
              remote:{
                type:'post',
                url:'checkUserRepeat.php',
                data:{
                  username:function(){
                    return $('form input[name=username]').val();
                  }
                }
              }
            },
            email:{
              required:true,
              email:true
            },
            password:{
              required:true,
              minlength:6,
            },
            password1:{
              required:true,
              minlength:6,
              equalTo:'#password'
            },
            verification:{
              required:true,
              minlength:4
            }
          },
          messages:{
            username:{
              required:"字段不能为空",
              minlength:'最小长度为6位',
              remote:'用户名重复'
            },
            email:{
              required:'字段不能为空',
              email:'邮件格式错误'
            },
            password:{
              required:"字段不能为空",
              minlength:'最小长度为6位'
            },
            password1:{
              required:"字段不能为空",
              minlength:'最小长度为6位',
              equalTo:'两次输入密码不一致'
            },
            verification:{
              required:'字段不能为空',
              minlength:'最小长度为4位'
            }
          }
        });
      }
  );
  </script>
</head>

<body>
  <form class="con" action="userSignup.php" method="post">
    <h1><strong>signup</strong></h1>
    <div class="con">
      <input type="text" name="username" value="" placeholder="用户名" autocomplete="off">
    </div>
    <div class="con">
      <input type="email" name="email" value="" placeholder="邮箱用于找回密码" autocomplete="off">
    </div>
    <div class="con">
      <input type="password" name="password" id="password" value="" placeholder="密码" autocomplete="off">
    </div>
    <div class="con">
      <input type="password" name="password1" value="" placeholder="再次确认密码" autocomplete="off">
    </div>
    <div class="con">
      <input type="text" name="verification" value="" placeholder="验证码" autocomplete="off">
      <!-- <iframe  src="verification.php" scrolling="no" width="140" height="42"></iframe> -->
          <img src="index.php?m=admin&f=login&a=verification" width="50%" height="100%" onclick="this.src='index.php?m=admin&f=login&a=verification'"
    </div>
    <div class="con">
      <input type="submit" name="" value="立即登录">
    </div>
    <p>已有账户?前去<a href="login.php">登陆</a></p>
</form>

  <script src="http://localhost/project/blog/static/index/js/jquery-3.2.1.js"></script>
  <script src="http://localhost/project/blog/static/index/js/jquery.validate.js"></script>
  <script src="http://localhost/project/blog/static/index/js/jquery.validate.min.js"></script>
  <script>
    //粒度效果
    let max_particles = 100;
    let particles = [];
    let frequency = 100;
    let init_num = max_particles;
    let max_time = frequency * max_particles;
    let time_to_recreate = false;

    // Enable repopolate
    setTimeout(function() {
      time_to_recreate = true;
    }.bind(this), max_time)

    // Popolate particles
    popolate(max_particles);

    var tela = document.createElement('canvas');
    tela.width = $(window).width();
    tela.height = $(window).height();
    $("body").append(tela);

    var canvas = tela.getContext('2d');

    class Particle {
      constructor(canvas, options) {
        let colors = ["#feea00", "#a9df85", "#5dc0ad", "#ff9a00", "#fa3f20"]
        let types = ["full", "fill", "empty"]
        this.random = Math.random()
        this.canvas = canvas;
        this.progress = 0;

        this.x = ($(window).width() / 2) + (Math.random() * 200 - Math.random() * 200)
        this.y = ($(window).height() / 2) + (Math.random() * 200 - Math.random() * 200)
        this.w = $(window).width()
        this.h = $(window).height()
        this.radius = 1 + (8 * this.random)
        this.type = types[this.randomIntFromInterval(0, types.length - 1)];
        this.color = colors[this.randomIntFromInterval(0, colors.length - 1)];
        this.a = 0
        this.s = (this.radius + (Math.random() * 1)) / 10;
        // this.s = 12 //Math.random() * 1;
      }

      getCoordinates() {
        return {
          x: this.x,
          y: this.y
        }
      }

      randomIntFromInterval(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
      }

      render() {
        // Create arc
        let lineWidth = 0.2 + (2.8 * this.random);
        let color = this.color;
        switch (this.type) {
          case "full":
            this.createArcFill(this.radius, color)
            this.createArcEmpty(this.radius + lineWidth, lineWidth / 2, color)
            break;
          case "fill":
            this.createArcFill(this.radius, color)
            break;
          case "empty":
            this.createArcEmpty(this.radius, lineWidth, color)
            break;
        }
      }

      createArcFill(radius, color) {
        this.canvas.beginPath();
        this.canvas.arc(this.x, this.y, radius, 0, 2 * Math.PI);
        this.canvas.fillStyle = color;
        this.canvas.fill();
        this.canvas.closePath();
      }

      createArcEmpty(radius, lineWidth, color) {
        this.canvas.beginPath();
        this.canvas.arc(this.x, this.y, radius, 0, 2 * Math.PI);
        this.canvas.lineWidth = lineWidth;
        this.canvas.strokeStyle = color;
        this.canvas.stroke();
        this.canvas.closePath();
      }

      move() {

        this.x += Math.cos(this.a) * this.s;
        this.y += Math.sin(this.a) * this.s;
        this.a += Math.random() * 0.4 - 0.2;

        if (this.x < 0 || this.x > this.w - this.radius) {
          return false
        }

        if (this.y < 0 || this.y > this.h - this.radius) {
          return false
        }
        this.render()
        return true
      }

      calculateDistance(v1, v2) {
        let x = Math.abs(v1.x - v2.x);
        let y = Math.abs(v1.y - v2.y);
        return Math.sqrt((x * x) + (y * y));
      }
    }

    /*
     * Function to clear layer canvas
     * @num:number number of particles
     */
    function popolate(num) {
      for (var i = 0; i < num; i++) {
        setTimeout(
          function(x) {
            return function() {
              // Add particle
              particles.push(new Particle(canvas))
            };
          }(i), frequency * i);
      }
      return particles.length
    }

    function clear() {
      // canvas.globalAlpha=0.04;
      canvas.fillStyle = '#111111';
      canvas.fillRect(0, 0, tela.width, tela.height);
      // canvas.globalAlpha=1;
    }

    function connection() {
      let old_element = null
      $.each(particles, function(i, element) {
        if (i > 0) {
          let box1 = old_element.getCoordinates()
          let box2 = element.getCoordinates()
          canvas.beginPath();
          canvas.moveTo(box1.x, box1.y);
          canvas.lineTo(box2.x, box2.y);
          canvas.lineWidth = 0.45;
          canvas.strokeStyle = "#3f47ff";
          canvas.stroke();
          canvas.closePath();
        }

        old_element = element
      })
    }

    /*
     * Function to update particles in canvas
     */
    function update() {
      clear();
      connection()
      particles = particles.filter(function(p) {
        return p.move()
      })
      // Recreate particles
      if (time_to_recreate) {
        if (particles.length < init_num) {
          popolate(1);
        }
      }
      requestAnimationFrame(update.bind(this))
    }

    update()
  </script>
</body>

</html>
<?php }
}
