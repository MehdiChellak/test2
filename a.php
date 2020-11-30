<?php

echo "hellow";

$ mkdir git_revert_test 
$ cd git_revert_test/ 
$ git init . Initialized empty Git repository in /git_revert_test/.git/ 
$ touch demo_file 
$ git add demo_file 
$ git commit -am"initial commit" [master (root-commit) 299b15f] initial commit 1 file changed, 0 insertions(+), 0 deletions(-) create mode 100644 demo_file 
$ echo "initial content" >> demo_file 
$ git commit -am"add new content to demo file" [master 3602d88] add new content to demo file n 1 file changed, 1 insertion(+) 
$ echo "prepended line content" >> 

demo_file $ git commit -am"prepend content to demo f
ile" [master 86bb32e] prepend content to demo file 1 file changed, 1 insertion(+) 
$ git log --oneline 86bb32e prepend content to demo file 3602d88 add new content to demo file 299b15f initial commit
es systèmes de gestion de version distribués
C’est à ce moment que le
s systèmes de gestion de v
ersion distribués entrent en jeu 
(DVCS en anglais pour Distributed Version Con
trol Systems). Dans un DVCS (tel que Git, Mercurial, Bazaar ou Da
rcs), les clients n’extraient plus seulement l