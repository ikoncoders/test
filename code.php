001. git setup 

step 1: 
cmd  
git --version 

step 2: 
cmd 
git help config 

step 3: 
git config --help 

step 4: make local directory
cmd 
mkdir test 

step 5: init test 
cmd 
git init 

step 6: create file
touch index.php 

step 7: check status 
git status 

step 8: add files to directory 
git commit add index.php 

step 9: create git user 
cmd 
ikonc@DESKTOP-FI7QPSK MINGW64 ~/OneDrive/Desktop/test (master)
$ git config --global user.username ikoncoders

ikonc@DESKTOP-FI7QPSK MINGW64 ~/OneDrive/Desktop/test (master)
$ git config --global user.email "ikoncoders@gmail.com"

step 10: create new repository in github 
 = test 


step 11: push 
cmd 
$ git init
$ git add .
$ git commit -m "first commit"
$ git branch -M main
$ git remote add origin https://github.com/ikoncoders/test.git

=== confirm authentication to continue === 
$  git push -u origin main


step 12: store ttutorial source code 
$ touch code.php


step 13: copy and paste code manually