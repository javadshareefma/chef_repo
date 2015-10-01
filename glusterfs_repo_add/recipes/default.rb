cookbook_file "/etc/yum.repos.d/glusterfs.repo" do
  source "glusterfs.repo"
  action :create
end
