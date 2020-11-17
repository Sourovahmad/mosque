
#!/bin/bash

### upload this on .git / hooks / post receive

while read oldrev newrev ref
do
  branch=`echo $ref | cut -d/ -f3`

  if [ "master" == "$branch" ]; then
    git --work-tree=/home/mumixhqm/demos.abasas.tech/mmc checkout -f $branch
    echo 'Changes pushed live.'
  fi


done