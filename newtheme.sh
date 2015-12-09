#!/bin/bash
# Theme starting bash script by rolle (github.com/ronilaukkarinen & github.com/digitoimistodude)

txtbold=$(tput bold)
boldyellow=${txtbold}$(tput setaf 3)
boldgreen=${txtbold}$(tput setaf 2)
boldwhite=${txtbold}$(tput setaf 7)
yellow=$(tput setaf 3)
green=$(tput setaf 2)
white=$(tput setaf 7)
txtreset=$(tput sgr0)

while true; do
read -p "${boldyellow}Project created? (y/n)${txtreset} " yn
    case $yn in
        [Yy]* ) break;;
        [Nn]* ) exit;;
        * ) echo "Please answer y or n.";;
    esac
done

echo "${boldyellow}Project name in lowercase:${txtreset} "
read -e PROJECTNAME
echo "${boldyellow}Theme name in lowercase (no spaces or special characters):${txtreset} "
read -e THEMENAME

PROJECTPATH="${HOME}/Projects/${PROJECTNAME}"
STARTERTHEMEPATH="${HOME}/neckbeard"
PROJECTTHEMEPATH="${HOME}/Projects/${PROJECTNAME}/content/themes/${THEMENAME}"

echo "${yellow}Checking neckbeard updates...${txtreset}"
cd $HOME
git clone git@github.com:digitoimistodude/neckbeard.git
cd $STARTERTHEMEPATH
git pull
echo "${yellow}Copying starter theme to project folder ${HOME}/Projects/${PROJECTNAME}/content/themes/${THEMENAME}${txtreset}"

cp -R ${STARTERTHEMEPATH} ${PROJECTTHEMEPATH}
echo "${yellow}Generating theme files with theme name and texdomain called ${THEMENAME}${txtreset}"

cd $STARTERTHEMEPATH && rm -rf .git

# THE magical sed command by rolle (goes through every single file in theme folder and searchs and replaces every neckbeard instance with THEMENAME):
for i in `grep -rl neckbeard * 2> /dev/null`; do sed -i '' -e "s;neckbeard;seak;" $i $i; done

echo "${yellow}Setting up package.json & gulpfile.js from devpackages github${txtreset}"
cd ${PROJECTPATH}
git clone git@github.com:digitoimistodude/devpackages.git
echo "${yellow}Generating package.json from git@github.com:digitoimistodude/devpackages.git${txtreset}"
sed -e "s/\PROJECTNAME/$PROJECTNAME/" -e "s/\PROJECTNAME/$PROJECTNAME/" -e "s/\PROJECTNAME/$PROJECTNAME/" $PROJECTPATH/devpackages/package.json > "$PROJECTPATH/package.json"
echo "${yellow}Installing and updating local node.js packages (may take a while)${txtreset}"
cd "$HOME/Projects/$PROJECTNAME"
npm-check-updates -u
sudo npm install

echo "${yellow}Generating gulpfile.js from git@github.com:digitoimistodude/devpackages.git${txtreset}"
sed -e "s/\THEMENAME/$THEMENAME/" -e "s/\THEMENAME/$THEMENAME/" -e "s/\THEMENAME/$THEMENAME/" $PROJECTPATH/devpackages/gulpfile.js > $PROJECTPATH/gulpfile_temp.js
sed -e "s/\PROJECTNAME/$PROJECTNAME/" -e "s/\PROJECTNAME/$PROJECTNAME/" -e "s/\PROJECTNAME/$PROJECTNAME/" $PROJECTPATH/gulpfile_temp.js > $PROJECTPATH/gulpfile.js

echo "${yellow}Generating bower.json from git@github.com:digitoimistodude/devpackages.git${txtreset}"
cp $PROJECTPATH/devpackages/.bowerrc $PROJECTPATH/
sed -e "s/\THEMENAME/$THEMENAME/" -e "s/\THEMENAME/$THEMENAME/" -e "s/\THEMENAME/$THEMENAME/" $PROJECTPATH/devpackages/bower.json > $PROJECTPATH/bower_temp.json
sed -e "s/\PROJECTNAME/$PROJECTNAME/" -e "s/\PROJECTNAME/$PROJECTNAME/" -e "s/\PROJECTNAME/$PROJECTNAME/" $PROJECTPATH/bower_temp.json > $PROJECTPATH/bower.json
echo "${yellow}Installing bower packages...${txtreset}"
cd ${PROJECTPATH}
bower install

echo "${yellow}Cleaning up...${txtreset}"
rm -rf $PROJECTPATH/devpackages
rm -f $PROJECTPATH/gulpfile_temp.js
rm -f $PROJECTPATH/bower_temp.json
rm -f ${PROJECTTHEMEPATH}/newtheme.sh
rm -f ${PROJECTTHEMEPATH}/.gitignore
rm ${PROJECTTHEMEPATH}/README.md
rm ${PROJECTTHEMEPATH}/LICENSE.md
rm ${PROJECTTHEMEPATH}/neckbeard.svg
echo "${yellow}Adding media library folder...${txtreset}"
mkdir -p ${PROJECTPATH}/media
chmod 777 ${PROJECTPATH}/media
echo "${yellow}Activating theme...${txtreset}"
cd ${PROJECTPATH}
ssh vagrant@10.1.2.3 "cd /var/www/$PROJECTNAME/;vendor/wp-cli/wp-cli/bin/wp theme activate $THEMENAME"
echo "${boldgreen}All done! Theme generated and activated. Your theme can be found at $PROJECTTHEMEPATH${txtreset}"
