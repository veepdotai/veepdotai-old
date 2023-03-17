# Configuration of the GitPod development environment

### Workspace GitPod
To open Gitpod, you have to go to your github repository and put **https://gitpod.io** at the beginning of the URL of the git project URL.

Once the workspace is open, put all the folders and files of the plugin in a single folder if it is not already done.

### Installing DDEV
Install DDEV :

```bash
brew install ddev/ddev/ddev
```

Configure DDEV as a WordPress project: 

```bash
ddev config --project-type=wordpress
```

Start DDEV : 

```bash
ddev start
```

### Installing WordPress
Download WordPress :

```bash
ddev wp core download
```

Put the extension under _wp-content/plugins_

### Launch the page in the browser
Launch DDEV :

```bash
ddev launch
```

### WordPress Configuration

Configure WordPress and then activate the add-on in the WordPress extension menu.

