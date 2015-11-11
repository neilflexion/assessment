EPIC PHP/MySQL Assessment
==========


## Get Started

* Download and Install [Vagrant][1]
* Download and Install [VirtualBox][2]
* Clone the EPIC PHP Assessment [GitHub Repository](https://github.com/epiconline/assessment.git)
* Run ``` vagrant up ``` (If you're new to Vagrant, it might be helpful to review a [tutorial][4])
* Access Your Project at  [http://192.168.33.10/][3]
* Begin the [assessment](ASSESSMENT.md)

### System Information

- ScotchBox Vagrant LAMP Stack
- Ubuntu 14.04 LTS (Trusty Tahr)
- PHP 5.6
- MySQL 5.5
- Vim
- Git

## Basic Vagrant Commands


### Start or resume your server
```bash
vagrant up
```

### Pause your server
```bash
vagrant suspend
```

### Delete your server
```bash
vagrant destroy
```

### SSH into your server
```bash
vagrant ssh
```


## Database Access

### MySQL 

- Hostname: localhost or 127.0.0.1
- Username: root
- Password: root
- Database: epic
- SSH Host: 192.168.33.10
- SSH User: vagrant
- SSH Pass: vagrant




 [1]: https://www.vagrantup.com/downloads.html
 [2]: https://www.virtualbox.org/wiki/Downloads
 [3]: http://192.168.33.10/
 [4]: https://scotch.io/tutorials/get-vagrant-up-and-running-in-no-time