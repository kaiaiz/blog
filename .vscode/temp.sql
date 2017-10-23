create table category(
  cid int(11) unsigned comment '分类主键',
  cname varchar(30) comment '分类',
  cimg varchar(30) comment '分类图片'，
  cpower tinyint unsigned comment '分类权限',
  thumb varchar(30) comment '分类缩略图',
  cinfo varchar(255) comment '分类简介',
  nav  tinyint(1) unsigned comment '是否出现在导航中'
)comment '分类';