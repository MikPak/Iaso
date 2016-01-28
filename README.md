# How to establish your own Focus production line

**Table of Contents**
- [Introduction](#introduction)
- [Initialization](#commence-toolchain-creation)
- [Password management](#password-management)
- [Communication channel](#communication-channel)
- [Work organization](#work-organization)
- [Documentation tools](#documentation-tools)
- [Tool integrations](#tool-integrations)
- [Mockups](#mockups)  
  -[NinjaMock](#ninjamock)  
  -[Fluid UI](#fluid-ui)
- [Managing the code](#managing-the-code)
- [Continuous Integration and Deployment](#continuous-integration-and-deployment)
- [Platform for App Deployment](#platform-for-app-deployment)
- [Feedback](#feedback)
- [References and Links](#references-and-links)
- [Questions & Answers](#questions-and-answers)

## Introduction
(aka. Why so many tools?)

Software development consists of many phases. It is better to work efficiently as a team and design and plan your intentions well rather than jump straight to work. In our work this has been allowed by wide variety of tools and components. With this guide we introduce you to a barebones version of our environment. Our tools and methods of working are based on the principles of Dev Ops and continuous integration, latter of which well described in image below as a concept. We sincerely hope that you will get some idea and motivation out of our researched and tried toolchain and in time learn to look for tools that complete your development environment.

To understand the basic idea behind our toolchain and environment, have a look at the following concepts:
- DevOps
- Continuous Delivery
- Continuous Integration

Some material on these subjects is available in our [references and links](#references-and-links)

![Continuous integration process](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-14%2010:26:38.png)  
This is a figure describing Agile DevOps -like process cycle. Continuous integration can be seen as one part of the whole process. [Reference 1](#R1)

![Focus toolchain](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Focus_toolchain.png)
And here's the Focus toolchain, the minimal version of previous toolchain (Corolla) that you'll be working with in this tutorial. Some services have been replaced and some are not necessary in this context, but the basic idea is the same. Creating a product from start to finish containing all the processes from DevOps. For more information about our previous toolchain, see [Corolla reference production environment](https://github.com/N4SJAMK/teamboard-meta/wiki/about-production-environment)

## Commence toolchain creation

We start by creating necessary services to help us manage passwords and other project information. In this case I use gigapossu@gmail.com as example account to help you get through various phases of service creation. In case you have several accounts you might be able to use in the process, it is advisable to either use one of them for all services or distribute management of certain services to different people for efficiency. But the easiest and most safe method will probably be using the same account for all services, but in that case remember to take a good use of password management in case the account owner is absent at some point. If there's a case where you'll have to activate some account via email and the account owner is unreachable, one viable option would be to create a dedicated account for your project. TL;DR: Create a dedicated account for your project, for example Gmail account, unless you have a good reason to use existing account.

Now, into the toolchain process itself. There are several ways to do this, and here we'll provide two valid options:
- Full focus toolchain
- Coding-based toolchain

The first option means that you'll go through all the tools mentioned in the table of contents. The latter means that you'll use your own means of communication, design etc. and just use the tools necessary to deploy and manage code from our toolchain. That basically means using the following, modified table of contents:

**Table of Contents Ants in the Pants Edition**
- [Password management](#password-management)
- [Work organization](#work-organization)
- [Managing the code](#managing-the-code)
- [Continuous Integration and Deployment](#continuous-integration-and-deployment)
- [Platform for App Deployment](#platform-for-app-deployment)
- [Feedback](#feedback)
- [References and Links](#references-and-links)

## Password management

First useful service we should establish is a password management service. In our case CommonKey has proven itself a good option, but you may also use something else if you want. Just keep in mind that proper password management saves you from a lot of trouble in managing your project passwords.

![CommonKey account creation](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2014:18:39.png)

![CommonKey account confirmation](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2014:19:56.png)

When you have created an account and logged in you may install browser extension to make password management easier, but it is not mandatory. At the time of writing this guide the said browser extension was not available, so don't worry too much if you aren't able to install the browser extension.

![CommonKey company creation](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2014:30:27.png)

![CommonKey teams](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2014:33:39.png)

![Invite users to CommonKey company](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2014:35:15.png)

As you can see from the screenshots, it is possible to manage your password sharing with all kinds of options, for example creating teams inside your main account or just simply creating one company account without teams, whatever floats your boat. The most simplified option would be of course to just use one account without company option and share the password with all the users that have access to your projects' passwords, but feel free to compare pros and cons between various approaches. To avoid using too much time into tinkering with password management, it would be wise to go with somewhat simple approach, though.

To create an example scenario here we've created our password account in CommonKey with two methods, Auto-login and Custom app. The rule of thumb is that if your application of choice is listed in Auto-login, it should be used, otherwise use Custom app.

![CommonKey password account with auto-login](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2014:43:51.png)

![CommonKey password account with custom app](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2014:44:56.png)

After creating a password account you can open its details by clicking it on the list, in this example we are using personal Gmail account. When you have opened the account details, you can edit your password details, show the password in plain text for a few seconds, or copy it to your clipboard to paste it to your login of choice.

![CommonKey copy password to clipboard](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2014:50:10.png)

## Communication channel

One of the most important cornerstones in every teams' ability to work together is communication. Our project has tried a couple of different platforms for communication, and we are currently using Slack. Slack is versatile, configurable, can be integrated with several other tools and most importantly, it is free. So let's go ahead and establish our own communication project for our project in our next step.

![Slack create a new team](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2015:09:41.png)

Let's navigate to https://slack.com/ and create a new team. To create a new team sign up with your email address. It is completely up to you if you want to receive email notifications about Slack service.

After you've named your Slack channel, you have to create an url to be able to access it. You might want to use a bit more imagination to create something a bit more practical and compact than what's used in this example, but please keep in mind that URL has to be unique so in cases of very short URLs you might be limited by addresses already reserved by other users.

In the last step of creating our slack channel you'll choose your username. It is tough to give recommendations on this one, although you might want to steer away from too complicated or offensive usernames, just in case. In this example I decided to stay on my very imagination-limited path.

![Slack confirm account details](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2015:23:35.png)

In case everything went well so far, you'll have a chance to see your choices so far and confirm that this is indeed what you'll want to do. If you are confident on your choices, by pressing the button below you are able to establish your own Slack channel, and start inviting people to it.

Now you can start customizing your fresh communication channel. Enabling desktop notifications is optional, but helps quite a lot in being able to notice urgent messages that are being sent to you over Slack. Slack also has mobile applications if you get a feeling that you'd like to be available better or there's one tab too many open in your web browser. Either way setting your Slack channel up is pretty simple. With “invite people” you'll be able to add members to your communication channel. At the time of writing, “full member” is the only available account type for free Slack accounts.

![Invite people to Slack team](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2015:30:22.png)

 ![Creating a new channel](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-06%2015:34:47.png)

It is possible that you can manage with the channels that have already been provided to you by default, but at least in case your team has several teams with different purposes within it (teamception?) it is possible to create new public/private channels for controlling the conversation. Or you can just create different channels for different topics if you want. Creating a private channel allows you to strictly decide who gets to participate in conversation, and the rest of users will not be able to see this private channel without invitation.

Once you've created your Slack channel, you'll receive an email that asks you to set a password for your account. You should do that to avoid being confused by the fact that when you try to log back in to your channel it will prompt you for a password, which you have not even set, thus making it impossible for you to login before the password has been set.

After you've added a password for your Slack account, it is recommended to add this password to your password management of choice. You might want to write your domain name and other information about your Slack channel somewhere to avoid confusion for example in case you want to log in to your channel from other device.

## Work organization

![Trello front page](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot from 2015-11-09 11:03:16.png)

The next tool we should establish in our quest for viable production environment is Trello. Trello can be effectively used for tracking progress of your project and it can also be integrated with Slack. With a little imagination you can find creative ways to benefit from Trello, such as sharing materials and images related to your project phases and dividing your project into smaller, easily manageable parts.

![Trello boards](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-09%2011:13:28.png)

![Creating a new Trello board](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-09%2012:54:17.png)

Confirm your account via email message and start getting to know Trello. Let's have a short tutorial on how to use Trello. The default board called “Welcome Board” can be used to familiarize yourself with Trello and get some useful tips on how to use it along the way. After that you might want to create a new board for your project. When creating a new board you'll be able to assign new teams or change your board type between setting private, team and public. Of course you won't be able to use team setting unless you have already created some teams. In the most simple scenario where you have a small team working on a single project you can just create a public  board that you can name with its purpose. Here's a simple example of tasking board with Kanban-influenced workflow.

![Trello example board](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-09%2013:13:54.png)

![Adding new users to Trello](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-09%2013:47:22.png)

Adding new users to your board can be done via the menu in right corner of your board. Public boards can be seen by everyone but edited only by members of the board. Private boards are only seen and edited by members.

## Documentation tools

Lucidchart can be used for making diagrams and you can think of it as a free replacement to Microsoft Visio. There are lots of free alternatives to programs like this, but compared to Dia, for example, Lucidchart has a benefit that it's online-based and this makes sharing your diagrams with your team and other parties a lot easier.

![Lucidchart front page bar](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-09%2015:02:08.png)

![Lucidchart free account](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-09%2015:02:49.png)

![Lucidchart account creation](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-09%2015:21:14.png)

From the front page click “sign up free” and in the next screen below the paid subscriptions you can find option to start free account. Free accounts have some complexity restrictions in diagrams and other hindrances, but it should be fine for most small project cases. Lucidchart includes a lot of templates you can use for making your diagrams easier, and tips and tutorials can be useful if you don't know how to start. In the main screen you can create new diagrams or edit existing ones. 

As you can probably see pretty soon, the default forms and shapes won't get you very far. Therefore it is good that you can add more shape libraries by clicking “more shapes” in the lower left corner and choosing the libraries you believe are useful to your use case. Then save and you are free to start creating diagrams. In the upper left corner you can name your flowchart and just below it, next to “file” menu you can see Lucidchart icon. By clicking it you can activate “Go to documents” option, which returns you back to the main screen. 

Hint: When you create a new shape that has been equipped with a default name, you can double click this name to modify it. Same actually applies to lines you can draw between items; you can double click somewhere along the line to make a text box on the point of click.
Hint 2: When using a background for your other icons, for example the cloud in this topology image, it is recommended to first create, name and arrange icons and then add the background and send it to background with mouse button 2 menu. Otherwise Lucidchart might get confused with the object user wants to interact with.

Here's a quickly made example wannabe-topology that is ugly and crude and has no deeper meaning. It's here just as an example of typical scenario when you would need Lucidchart: drawing topology images.

![Topology made with Lucidchart](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-10%2011:43:45.png)

## Tool integrations

Zapier is a tool that can be used for many purposes. Most commonly, it is used to create integrations between services that do not have native support in themselves to be integrated. Of course, integrations done with Zapier are not as well-executed as official implementations, but in some cases if you simply want some of your tools to transmit data into another the Zapier is the way to go. In our use case we have at some point of our project used Zapier for transferring our UserVoice tickets to our GitHub issues.

## Mockups

### NinjaMock

![NinjaMock front page](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-13%2011:09:28.png)

![NinjaMock project selection](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-13%2011:10:07.png)

![NinjaMock user interface](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-13%2011:10:48.png)

![NinjaMock create account](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-13%2011:13:44.png)

For designing our first piece of software we can use a wide variety of tools. We've introduced two tools here you can choose from. Just look at the pictures to get a good look at how their UI works and make your decision. Of course nothing prevents you from making a mockup with both tools and then choosing the one that better suits your style. First up, in this guide we introduce NinjaMock. We start up by clicking “start designing now” on the front page, choosing our platform, in this case preferrably www, and then we are already on the design interface. At this point we'd probably want to create and account from the top right corner to maintain our progress. After creating an account you create a new project and again, choose your platform of choice and you're back in program user interface, this time logged in with your account. 

![Big red button original](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-13%2012:29:08.png)

![Big red button well done](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-13%2012:48:08.png)

![NinjaMock page linking](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-13%2012:53:15.png)

In this example we created a very simple point of interaction, a big red button you can press. First we take two circles from shapes, one larger than the other, the same height and width per circle. Then we set them on top of each other, set colours from fill brush via menu. You can add labels via basic menu on the left, and make your object clickable by adding a click spot. After that create a new page from the bottom of the page by pressing “add portrait page” button. 

The easiest way to do what we're about to do here is to select the button and its texts in their entirety and copy them to page 2, but you might want to remove clickable area from your button before copying. Try to set the button on page 2 into same place where it is on your page 1 by following height and vertical movement indicators. After you've done this you can add the clickable area again to page 1 and link it to page 2. 

Change the texts on page 2 so you can clearly see that the page changes when you click on the link you have created. Now you can preview your page from preview button on upper right corner and see if your mockup works as it should. It is good to know that if you just link the circle to next page, you may notice that clicking the text area does nothing. This can be fixed by clicking the text areas and adding a page link to them too. 

### Fluid UI

![Fluid UI account creation](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-07%2013:34:03.png)

Another good alternative for making mockups is Fluid UI. In this case we've created exactly the same mockup as in NinjaMock, so there's no need for doing this again if you've already designed your prototype in NinjaMock, and this is just an alternative method. We just wanted to introduce you two different types of software for doing mockups because the approach to creating mockups is a bit different between NinjaMock and Fluid UI. 

![Fluid UI interface](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-07%2013:39:10.png)

The process of creating our simple big red button is pretty straightforward here. You just choose and drag circle from Icons menu and resize it to your liking. Then by clicking the shape you get a menu where you can change its color and other options. Then use the visual cues to center your shape on the screen and align two circles on top of each other so that the one that is below is gray and the one on top is red. Using other colours is not strictly forbidden if you'd rather experiment with other colours. Then we'll continue by adding textboxes from Text menu. I chose medium size for the upper text and large for one at the bottom. You may edit and change colours for these boxes by clicking them and accessing the menu. After you're satisfied with your results you may continue by cloning the page and create another page where you'll get when you've linked your two pages. 

![Tips for user](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-07%2013:54:29.png)

![Fluid UI linking](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-07%2013:58:03.png)

![Linking process](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-07%2013:58:31.png)

You'll likely get useful tips while creating your wireframe, so remember to access them, for there's a good chance they'll make your work easier. In Fluid UI you link objects, or widgets simply by clicking the widget and then “Link”. Then you'll have the option to choose where your widget of choice leads. Then preview your mockup to see if it works just as it should. As in NinjaMock, here you should also link your textboxes to next page to prevent them from being unclickable objects on your circle.

## Managing the code

![Join GitHub](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-27%2013:37:16.png)

![Choose GitHub plan](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-27%2013:38:20.png)

GitHub is a very important tool for managing your code and making it easily accessible to use in various environments. Create your account by clicking “sign up” and provide the account with your user information. In this case I'm using N4S project repositories that have been created earlier, but in your case you'll probably want to know how to create private repositories provided by JAMK. After adding some of your account information confirm your email via link that you've received to your accounts' address and feel free to explore how GitHub works. In this case I've created a private repository called gigacorolla-toolchain for N4S project and used my main account to invite our Gigapossu user to that private repository. After our GitHub account has been set up and has a repository to work on, we are set to initiate our CircleCI account. In your case your organization will probably be JAMK-IT but otherwise the process should be somewhat similar.

## Continuous Integration and Deployment

![CircleCI GitHub integration](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-27%2013:57:23.png)

![CircleCI GitHub authorization](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-27%2013:58:22.png)

![CircleCI testing and deployment](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-27%2014:27:55.png)

CircleCI is a tool used for Continuous Integration and Deployment. From the front page, click “Sign up free” and create an account. After that, “Add code from GitHub” and you should be provided with login screen or in case you're already logged in, you'll be asked to authorize CircleCI to use your GitHub account with listed permissions. At this point it's good to know that you'll have to have admin permissions to repository you're about to add to CircleCI. If there's no valid reason against this, while you're at it, you might want to get yourself the owner permissions to repository, for you'll need them later. The next part depends on whether you've created a private repository for your account or your organization. In this case the repository has been created for our organization, N4SJAMK, so we choose that as an organization and because we only have privileges to gigacorolla-toolchain repository under this organization we select it for our repository. 

After that click on “Build project” next to your chosen repository. Because in this case our repository was just about empty with no code to build, we received some warnings in the process. That issue will be fixed when we've got our code underway in GitHub, and this phase is not really relevant in case your GitHub repository doesn't have anything meaningful in it. After you've created your code and project to GitHub repository, the process of linking it to CircleCI is pretty straightforward. You just add your repository as a project and you're good to go. However, if you don't have tests for your code you may run into problems.

At this point it is recommended to create Heroku account as displayed in the next chapter. After that, continue from the next section.

![CircleCI project settings](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-08%2012:43:34.png)

After you've deployed your code to your GitHub repository, it is time to get our CircleCI and Heroku environments working together. To accomplish this and get the tests run appropriately, we made a dummy file with javascript for the test to pass and deployment to Heroku work. You can see our implementation in https://github.com/JAMK-IT/reference-product-line -repository. At this point please notice that you'll not be able to add repositories to your watchlist unless you are owner of the repository in question. Now, at this point we assume that you are the owner of the repository you're about to use with CircleCI for Heroku deployment, you have some code in your GitHub repository and you have CircleCI and Heroku accounts created. You'll also need some kind of simple test to pass deployment phase if you want your code to be deployed to Heroku. You can see the example from our repository stated earlier for our dummy test. 

![Adding CircleCI API Key](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-08%2012:44:18.png)

If you've not yet created Heroku account feel free to do it now and then return to this part. Next up you'll be linking CircleCI and Heroku accounts so that CircleCI will be able to deploy your code to Heroku as a working app. From the main view, click the settings button next to your repository of choice and you'll end up in project settings. After that you're going to need Heroku API key from Heroku account. Below the dashboard you'll see your own account. Click from the arrow pointing downwards from the right side of your account name and then open “Manage account” menu. Scroll down until you find “API Key” and then click “Show API Key...”, enter your password and then copy-paste this key to your CircleCI. Just above it you'll see a guide to help you generate SSH keys. Use it and add your generated SSH keys to CircleCI profile at the same time. After that you're good to go.


## Platform for App Deployment

![Heroku account creation](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-27%2014:36:48.png)

![Heroku account creation finished](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-11-27%2014:55:09.png)

Heroku is our site of choice for building our app in working condition. This is basically where our application is deployed after being tested and compiled in CircleCI. To create your account click “Sign up for free” and once again, fill in the necessary information to get your account initiated. If you already have in mind what programming language you're about to use for your project then go ahead and select it from the menu, but Heroku also has couple of options in case you're not so sure. After filling out the account information you'll be asked to confirm your email account. After confirming your account you'll be prompted to set password to your account. Do so and log in.

## Feedback

Choosing a user feedback system is a bit more complicated issue. We used UserVoice for quite a while to collect feedback from our Contriboard, and as integration with our issue listing was not possible from the start, we used Zapier to export our feedback tickets from UserVoice into GitHub issues. We were satisfied with UserVoice and it served us well. However, since then things have become a bit more complicated. UserVoice has changed its payment model drastically. When we used it they had free account option that was limited in some functionalities but didn't have any kind of trial period or something that was severely limiting our basic usage. Since then they have moved to radically different pricing methods. Now they have 14 day free trial and first pricing option starts from 499$ a month. So now we're in a situation where we'll have to find another free alternative that has the necessary integrations or implement those integrations manually with Zapier.

![Doorbell.io front page](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-08%2012:07:00.png)

One simple option we tried was Doorbell.io, se we decided to add it to this guide. In all its simplicity, create an account, create a new application by pressing “+” -button next to your user account in the upper right corner of the site and name your application. Then you'll be given a piece of JavaScript code that you can add to your application that you want feedback from. The feedback you'll receive will be added to your Doorbell.io account. In our case the best option will be of course to add this piece of code to GitHub repository in our application, and then deploy it with CircleCI to Heroku. After that you can get feedback from your application.

![Doorbell.io application added](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-08%2013:38:02.png)

![Doorbell.io feedback](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-08%2013:35:05.png)

![Application deployed to Heroku with feedback](https://github.com/JAMK-IT/reference-product-line/blob/master/images/Screenshot%20from%202015-12-08%2013:19:21.png)

And here we have our application deployed to Heroku with feedback feature! (http://focus-demo.herokuapp.com/)

## References and Links

<a name="R1">Sutinen, H. 2014. Rapid design using web based UI design tools : Case: Contriboard.    
http://urn.fi/URN:NBN:fi:amk-2014121219576</a>

<a name="R2">Several writers, 2015. Work Packages - Digile N4S.  
http://www.n4s.fi/en/work-packages/</a>

<a name="R3">Several writers, 2015. DevOps - Wikipedia, the free encyclopedia.  
https://en.wikipedia.org/wiki/DevOps</a>

<a name="R4">Several writers, 2015. What is DevOps? | the agile admin.  
http://theagileadmin.com/what-is-devops/</a>

<a name="R5">Several writers, 2015. Continuous delivery - Wikipedia, the free encyclopedia.     
https://en.wikipedia.org/wiki/Continuous_delivery</a>

<a name="R6">Several writers, 2015. Continuous integration - Wikipedia, the free encyclopedia.      
https://en.wikipedia.org/wiki/Continuous_integration</a>

<a name="R7">Fowler, M. 2006. Continuous integration.  
http://martinfowler.com/articles/continuousIntegration.html</a>

## Questions and Answers


