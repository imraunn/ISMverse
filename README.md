# ISMVerse

**Check out the live instance [over here](http://ismverse.ml)**

For the very first time in the history of IIT (ISM) Dhanbad, in synergy with Hackfest’s theme of ‘Metaverse’ we present our very own ISMverse! 

Well, *what is the ISMverse?* 

The **ISMVerse** is quite literally a virtual model of **IIT(ISM) Dhanbad**. The pristine Heritage building, the bustling RD tea stall, the calm and grand Diamond Hostel- you want it, you'll find it in the metaverse! There are characters from our life, big and small immortalized via the digital world. And the best part, ISMverse is not just limited to exploring. You will be able to interact, move and compete in challenges in this marvellous metaverse. Seems like the plot of a science fiction movie? Its made reality now. See for yourself the intricacies of ISMverse. 

### Steps to deploy
- Clone the repo
    ```bash
    git clone https://github.com/imraunn/ISMverse
    ```
- Edit the **connection.php** files in the *scoreboard* folder and *utils* folder, and add the password of the database in them. (Since they are connecting to the same database, make sure the passwords entered are the same)

- Edit the **secret.php** file in the *utils* folder, and the variable **secret** in the **TakeUserInput.cs** script of the Unity Project, and enter a secret to be used for securing the database requests. (Again note that both of these secrets should be the same)

- Edit the and the variable **rootURL** in the **TakeUserInput.cs** script of the Unity Project and provide the full URL to the folder where the PHP scripts are present (in the live deployment, it is *http://ismverse.ml/utils/*)

- Build the project for WebGL.

- Replace the *Build* and *TemplateData* folders, and the *index.html* file of the cloned repo with the ones from the build.

- Setup **Apache** and **MySQL** with the database password entered above, and copy all the files to the folder where Apache is running.

Made with ❤️ by Aniket Kumar Sahu, Raunak Asnani, Himanshu Das, Rishi Raj, Mohit Agarwal