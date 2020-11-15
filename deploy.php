<?php
// Repository Update
shell_exec('/mumixhqm/local/cpanel/bin/uapi VersionControl update name=repo_name repository_root=/home/mumixhqm/repositories/mosque branch=master source_repository=\'{"remote_name":"origin"}\'
');
// Deploy
shell_exec('/mumixhqm/local/cpanel/bin/uapi VersionControlDeployment create repository_root=/home/mumixhqm/repositories/mosque');
echo "done";
?>