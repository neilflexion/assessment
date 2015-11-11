# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "scotchbox"
    config.vm.synced_folder "www/", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
    
    # Optional NFS. Make sure to remove other synced_folder line too
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

    config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"
    config.vm.provision "shell", inline: <<-SHELL
        # disable default sites
        sudo a2dissite 000-default.conf
        sudo a2dissite scotchbox.local.conf

        # enable our site
        sudo cp "/vagrant/apache2/epic.local.conf" "/etc/apache2/sites-available/epic.local.conf"
        sudo a2ensite epic.local.conf

        # restart apache
        sudo service apache2 restart

        # Load MySQL
        mysql -uroot -proot < "/vagrant/db/schema.sql"
    SHELL
end
