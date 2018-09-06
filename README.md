## 介绍

**本环境是总结了一些php代码审计的题目，自己用docker搭建了相关环境，方便练习时直接使用**

### 使用说明

1. 每一个challenge主要结构：
   1. docker_env : 题目相关docker部署环境
   2. challenge.md : 题目相关题解
2. 环境使用
   1. 进入每个项目的docker_env环境
   2. 使用命令：`docker-compose build`
   3. `docker-compose up -d`
   4. 查看docker-compose.yml文件里的端口映射，访问环境`http://localhost:PORT`即可访问相关环境

这里就不说明docker-compose的安装方法了，网上都有。



