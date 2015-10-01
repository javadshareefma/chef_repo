cookbook_file "/etc/yum.repos.d/glusterfs.repo" do
  source "glusterfs.repo"
  action :create
end

yum_package 'glusterfs-fuse' do
  action :install
  flush_cache [ :before ]
end
yum_package 'nfs-utils' do
  action :install
  flush_cache [ :before ]
end
yum_package 'glusterfs-fuse' do
  action :install
  flush_cache [ :before ]
end

yum_package 'nginx' do
  action :install
  flush_cache [ :before ]
end

yum_package 'php' do
  action :install
  flush_cache [ :before ]
end

yum_package 'php-fpm' do
  action :install
  flush_cache [ :before ]
end

yum_package 'php-mysql' do
  action :install
  flush_cache [ :before ]
end

service "nginx" do
  action :enable
end

service "php-fpm" do
  action :enable
end
