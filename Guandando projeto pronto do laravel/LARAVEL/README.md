
     ,-----.,--.                  ,--. ,---.   ,--.,------.  ,------.
    '  .--./|  | ,---. ,--.,--. ,-|  || o   \  |  ||  .-.  \ |  .---'
    |  |    |  || .-. ||  ||  |' .-. |`..'  |  |  ||  |  \  :|  `--, 
    '  '--'\|  |' '-' ''  ''  '\ `-' | .'  /   |  ||  '--'  /|  `---.
     `-----'`--' `---'  `----'  `---'  `--'    `--'`-------' `------'
    ----------------------------------------------------------------- 


Hi there! Welcome to Cloud9 IDE!

To get you started, we have created a small hello world application.

1) Open the hello-world.php file

2) Follow the run instructions in the file's comments

3) If you want to look at the Apache logs, check out ~/lib/apache2/log

And that's all there is to it! Just have fun. Go ahead and edit the code, 
or add new files. It's all up to you! 

Happy coding!
The Cloud9 IDE team


## Support & Documentation

Visit http://docs.c9.io for support, or to learn more about using Cloud9 IDE. 
To watch some training videos, visit http://www.youtube.com/user/c9ide

Mysql:
 Root User: jose_espinheira
 Database Name: c9
 
- para iniciar o mysql: 

      $ mysql-ctl cli











Setting up udev (204-5ubuntu20.28) ...
 * udev requires hotplug support, not started
   ...fail!
invoke-rc.d: initscript udev, action "restart" failed.
dpkg: error processing package udev (--configure):
 subprocess installed post-installation script returned error exit status 1
dpkg: dependency problems prevent configuration of systemd-services:
 systemd-services depends on udev (>= 175-0ubuntu23); however:
  Package udev is not configured yet.

dpkg: error processing package systemd-services (--configure):
 dependency problems - leaving unconfigured
dpkg: dependency problems prevent configuration of libpam-systemd:amd64:
 libpam-systemd:amd64 depends on systemd-services (= 204-5ubuntu20.28); however:
  Package systemd-services is not configured yet.

dpkg: error processing package libpam-systemd:amd64 (--configure):
 dependency problems - leaving unconfigured
dpkg: dependency problems prevent configuration of initramfs-tools:
 initramfs-tools depends on udev (>= 147~-5); however:
  Package udev is not configured yet.

dpkg: error processing package initramfs-tools (--configure):
 dependency problems - leaving unconfigured
dpkg: dependency problems prevent configuration of plymouth:
 plymouth depends on initramfs-tools; however:
  Package initramfs-tools is not configured yet.
 plymouth depends on udev (>= 166-0ubuntu4); however:
  Package udev is not configured yet.

dpkg: error processing package plymouth (--configure):
 dependency problems - leaving unconfigured
dpkg: dependency problems prevent configuration of policykit-1:
 policykit-1 depends on libpam-systemd; however:
  Package libpam-systemd:amd64 is not configured yet.

dpkg: error processing package policykit-1 (--configure):
 dependency problems - leaving unconfigured
Errors were encountered while processing:
 udev
 systemd-services
 libpam-systemd:amd64
 initramfs-tools
 plymouth
 policykit-1
E: Sub-process /usr/bin/dpkg returned an error code (1)


sudo dpkg --configure -a
sudo apt-get -f install
sudo apt-get -f remove
sudo apt-get update
sudo apt-get upgrade

sudo apt-get autoremove
sudo apt-get clean
sudo apt-get update


sudo rm /var/lib/apt/lists/* ; sudo rm /var/lib/apt/lists/partial/* ; sudo apt-get clean ; sudo apt-get -f install ; sudo apt-get update

sudo apt-get install aptitude
sudo aptitude-update

apt-get remove --purge icedtea-netx
apt-get remove --purge icedtea-7-plugin
dpkg -r icedtea-netx
dpkg -r icedtea-7-plugin
apt-get -f install
apt-get autoclean
apt-get update
dpkg --configure -a

 udev
 initramfs-tools mountall plymouth plymouth-theme-ubuntu-text upstart couchdb
 
 
 
 
 Reading package lists... Done
Building dependency tree       
Reading state information... Done
The following packages were automatically installed and are no longer required:
  couchdb-bin couchdb-common libmozjs185-1.0
Use 'apt-get autoremove' to remove them.
The following packages will be REMOVED:
  couchdb initramfs-tools mountall plymouth plymouth-theme-ubuntu-text udev upstart
0 upgraded, 0 newly installed, 7 to remove and 0 not upgraded.
7 not fully installed or removed.
After this operation, 8300 kB disk space will be freed.
Do you want to continue? [Y/n] Y
(Reading database ... 74357 files and directories currently installed.)
Removing couchdb (1.5.0-0ubuntu1) ...
invoke-rc.d: unknown initscript, /etc/init.d/couchdb not found.
dpkg: error processing package couchdb (--remove):
 subprocess installed pre-removal script returned error exit status 100
invoke-rc.d: unknown initscript, /etc/init.d/couchdb not found.
dpkg: error while cleaning up:
 subprocess installed post-installation script returned error exit status 100
Removing plymouth-theme-ubuntu-text (0.8.8-0ubuntu17.2) ...
update-initramfs: deferring update (trigger activated)
Removing upstart (1.12.1-0ubuntu4.2) ...
Removing mountall (2.53) ...
Removing plymouth (0.8.8-0ubuntu17.2) ...
rmdir: failed to remove ‘/lib/plymouth/themes’: No such file or directory
rmdir: failed to remove ‘/lib/plymouth’: No such file or directory
update-initramfs: deferring update (trigger activated)
Removing initramfs-tools (0.103ubuntu4.11) ...
Removing udev (204-5ubuntu20.28) ...
Processing triggers for man-db (2.6.7.1-1ubuntu1) ...
Errors were encountered while processing:
 couchdb
E: Sub-process /usr/bin/dpkg returned an error code (1)

dpkg -i initramfs-tools-bin_0.99ubuntu13.1_i386.deb
dpkg -i initramfs-tools_0.99ubuntu13.1_all.deb

sudo apt-get autoremove
sudo apt-get --purge remove && sudo apt-get autoclean
sudo apt-get -f install
sudo dpkg-reconfigure -a

sudo apt-get update
sudo apt-get upgrade && sudo apt-get dist-upgrade
sudo dpkg-reconfigure -a
sudo dpkg --configure -a

sudo update-initramfs -u



apt-get download udev
$ sudo dpkg -i --force-confmiss udev_204-5ubuntu20.9_amd64.deb
$ sudo apt-get upgrade

phpbrew switch php-7.0.1
$ phpbrew use php-7.0.1
$ php -v

sudo apt-get update -y
 
sudo apt-get install php7.1-curl php7.1-cli php7.1-dev php7.1-gd php7.1-intl php7.1-mcrypt php7.1-json php7.1-mysql php7.1-opcache php7.1-bcmath php7.1-mbstring php7.1-soap php7.1-xml php7.1-zip -y





sudo mv /etc/apache2/envvars /etc/apache2/envvars.bak
sudo apt-get remove libapache2-mod-php5 -y
sudo apt-get install libapache2-mod-php7.1 -y
sudo cp /etc/apache2/envvars.bak /etc/apache2/envvars
 
sudo a2dismod php5
sudo a2enmod php7.1
 
sudo service apache2

sudo a2dismod php7.0  //now it tells me to restart
sudo service apache2 restart    //it worked!  But I want php7.0
//let's try and get it back
sudo a2enmod php7.0   //oops, get this message: `ERROR: Module php5 is enabled - cannot proceed due to conflicts. It needs to be disabled first!`
sudo a2dismod php5    //I don't need this for any of my sites
sudo service apache2 restart
sudo a2enmod php7.0   //it works with no errors indicated
sudo service apache2 restart    //and, we're good to go!







# Processos de preparação:

composer create-project --prefer-dist laravel/laravel sian "5.5.*"

instalar:
  https://github.com/appzcoder/crud-generator/blob/master/doc/README.md
  https://github.com/barryvdh/laravel-debugbar
  

Criar os CRUD's:

php artisan crud:generate Pessoa --fields='matricula_pessoa#integer;nome#string;sexo#char' --indexes='matricula_pessoa' --pk='matricula_pessoa' --soft-deletes=yes --validations='sexo#max:1|required;nome#required;matricula_pessoa#required|unique:pessoas'
--relationships='pessoas#belongsTo#App\Aluno, App\Professor'

php artisan crud:generate Curso --fields='id_curso#integer;nome#string' --pk='id_curso' --validations='id_curso#required|unique:cursos;nome#required'

php artisan crud:generate Projeto --pk='id_projeto' --fields='id_projeto#integer;titulo#string;conceito#select#options={"bom": "Bom", "ruim": "Ruim", "regular": "Regular"}' --validations='id_projeto#required|unique:projetos;titulo#required' 

php artisan crud:generate Aluno --fields='matricula_aluno#integer;id_curso#integer;matricula_pessoa#integer' --pk='matricula_aluno' --foreign-keys='matricula_pessoa;id_curso' --soft-deletes=yes --validations='matricula_aluno#required|unique:aluno;id_curso#required|exists:cursos;matricula_pessoa#required|exists:pessoas'
--relationships="aluno#hasOne#App\Pessoa"

php artisan crud:generate Professor --fields='matricula_professor#integer;data_admissao#date;matricula_pessoa#integer' --pk='matricula_professor' --foreign-keys='id_curso,matricula_pessoa' --soft-deletes=yes --validations='matricula_professor#required|unique:professors;data_admissao#required;matricula_pessoa#required|exists:pessoas'

php artisan crud:generate Disciplina --fields='id_disciplina#integer;nome#string;ementa#text;matricula_professor#integer' --pk='id_disciplina' --foreign-keys='matricula_professor' --validations='id_disciplina#required|unique:disciplinas;nome#required;ementa#required;matricula_professor#required|exists:professors'

php artisan crud:generate Turma --fields='id_disciplina#integer;id_curso#integer;ano_semestre#string;nome#string' --pk='id_disciplina,id_curso,ano_semestre' --foreign-keys='id_disciplina,id_curso' --validations='id_disciplina#required|exists:disciplinas;id_curso#required|exists:cursos;ano_semestre#required;nome#required'

php artisan crud:generate Ministra --fields='id_disciplina#integer;id_curso#integer;ano_semestre#string;matricula_professor#integer' --pk='id_disciplina,id_curso,ano_semestre,matricula_professor' --foreign-keys='id_disciplina,id_curso,ano_semestre,matricula_professor' --validations='id_disciplina#required|exists:disciplinas;id_curso#required|exists:cursos;ano_semestre#required;matricula_professor#required|exists:professors'

php artisan crud:generate Monitora --fields='id_disciplina#integer;id_curso#integer;ano_semestre#string;matricula_aluno#integer;matricula_professor#integer' --pk='id_disciplina,id_curso,ano_semestre,matricula_aluno' --foreign-keys='id_disciplina,id_curso,ano_semestre,matricula_aluno,matricula_professor' --validations='id_disciplina#required|exists:disciplinas;id_curso#required|exists:cursos;ano_semestre#required;matricula_aluno#required|exists:alunos;matricula_professor#required|exists:professors'

php artisan crud:generate Aluno_Turma --fields='id_disciplina#integer;id_curso#integer;ano_semestre#string;matricula_aluno#integer;id_projeto#integer' --pk='id_disciplina,id_curso,ano_semestre,matricula_aluno' --foreign-keys='id_disciplina,id_curso,ano_semestre,matricula_aluno,id_projeto' --validations='id_disciplina#required|exists:disciplinas;id_curso#required|exists:cursos;ano_semestre#required;matricula_aluno#required|exists:alunos;id_projeto#required|exists:projetos'

php artisan crud:generate Prova --fields='id_disciplina#integer;id_curso#integer;ano_semestre#string;matricula_aluno#integer;descricao#string;nota#integer' --pk='id_disciplina,id_curso,ano_semestre,matricula_aluno,descricao' --foreign-keys='id_disciplina,id_curso,ano_semestre,matricula_aluno' --validations='id_disciplina#required|exists:disciplinas;id_curso#required|exists:cursos;ano_semestre#required;matricula_aluno#required|exists:alunos;descricao#required;nota#required'


Route::get('/Pessoas', function () {  return view('BANCODADOS/pessoas');   });
Route::get('/Curso', function () {  return view('BANCODADOS/cursos');   });
Route::get('/Projeto', function () {  return view('BANCODADOS/projetos');   });
Route::get('/Aluno', function () {  return view('BANCODADOS/alunos');   });
Route::get('/Professor', function () {  return view('BANCODADOS/professor');   });
Route::get('/Disciplina', function () {  return view('BANCODADOS/disciplina');   });
Route::get('/Turma', function () {  return view('BANCODADOS/turma');   });
Route::get('/Ministra', function () {  return view('BANCODADOS/ministra');   });
Route::get('/Monitora', function () {  return view('BANCODADOS/monitora');   });
Route::get('/Aluno_Turma', function () {  return view('BANCODADOS/aluno_turma');   });
Route::get('/Prova', function () {  return view('BANCODADOS/prova');   });


/Pessoas
/Curso
/Projeto
/Aluno
/Professor
/Disciplina
/Turma
/Ministra falta
/Monitora
/Aluno_Turma
/Prova


Que porra, tenho que recuperar o index.php do git para recuperar o basico.