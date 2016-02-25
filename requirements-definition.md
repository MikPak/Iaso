# About the document

This document is a "living"-document, which is updates regularly. The structure can, and will be edited! The goal is to create a document which merges service design and software design together seamlessly.


## Service/software requirement definition

Document version number 1.2

### Material classification

Public

### Permission

This document is owned by JAMK University of Applied Sciences.

## Introduction

  * This document is for specifying the requirements for this project
  * This document is for an online quiz game for nurses to prepare for IV-test
  * This is a student project of second year software engineering students in JAMK University of Applied Sciences

### Short product description and customer profile

  * Service: An online quiz game for nurses preparing for an IV-test. The game improves deduction skills, mathematical skills, and the ability to read pharmaceutical information. 
  * Client story: Nursing students are required to complete multiple courses which consist of pharmaceutical studies. They face the problem of data overflow when introduced to thousands and thousands remedies and effective drug components. Not all students learn by sitting on classes and reading study notes so we were given the assignment of making studying a game like experience. Remedies are limited to most commonly used effective drug components and grouped based on their use.

### Client

  * School of Health and Social Studies of JAMK University of Applied Sciences (Niilo Kuokkanen, Niilo.kuokkanen@jamk.fi)

### Schedule

| Waypoint | Begins | Ends | Sprint | 
|:-----:|:-----:|:-----:|:-----:|:-----:|
| Course introduction, dividing the class to working groups | 11.1.2016 | 17.1.2016 | S0 |
| Setting up the the tools for the project, translating documents | 18.1.2016 | 24.1.2016 | S1 |
| More translation work, customer Q&A  | 25.1.2016 | 31.1.2016 | S2 |
| Mockup sketch, more documentation (project plan, communication plan etc.), database planning  | 1.2.2016 | 6.2.2016 | S3 |
| Mockup implementation, requirement specs, project plan and contract  | 7.2.2016 | 14.2.2016 | S4 |
| Presenting the mockup, collecting feedback for evaluation, preview of the documentation | 15.2.2016 | 21.2.2016 | S5 |
| Ratifying the contracts and plans (signing the contract with the client), production begins | 22.2.2016 | 28.2.2016 | S6 |
| Fixing the contract if necessary, working on the project  | 29.2.2016 | 6.3.2016 | S7 |
| Inviting the client to a meeting, working on the project  | 7.3.2016 | 13.3.2016 | S8 |
| Executive committee meeting with the client, working of the project  | 14.3.2016 | 20.3.2016 | S9|
| Working on the project | 21.3.2016 | 27.3.2016 | S10 |
| Demos and collecting feedback, working on the project  | 28.3.2016 | 3.4.2016 | S11 |
| Fixing, testing, working on the project  | 4.4.2016 | 10.4.2016 | S12 |
| Fixing, testing, working on the project  | 11.4.2016 | 17.4.2016 | S13 |
| Finishing the project and presentation of the project  | 18.4.2016 | 28.4.2016 | S14 |
| The project is over  | 29.4.2016 | 29.4.2016 | S15 |

For more:
* [Gannt Chart] (https://drive.google.com/folderview?id=0B2lyrNivVw3rVDR3OWRuTVh1ckU&usp=sharing)
* [Sprint backlog] (https://github.com/JAMK-IT/IIZP2010-system-project/wiki/sprint-backlog)

## Known stakeholders and customers of the service

### Stakeholders

Supervisors :

* Marko ”NarsuMan” Rintamäki, Marko.rintamaki@jamk.fi
* Paavo Nelimarkka, Paavo.nelimarkka@jamk.fi 
* Matti Mieskolainen matti.mieskolainen@jamk.fi

Client : Niilo Kuokkanen, Niilo.kuokkanen@jamk.fi

## Customer Profiles

  * Client 1, Nurse

## Stakeholder map

![](http://student.labranet.jamk.fi/~H9594/Jarjestelma/Capture.PNG)

## General Customer Journey

![](http://student.labranet.jamk.fi/~H9142/projectdisp/Userstory2.png)

## Service Domain areas

Is there any different product versions to different environments, what?

  * Desktop version
  * Mobile version
  
Software sub-sections/blocks

  * Database
  * PHP/HTML
  * Business Logic
  * UI

## The most important features

  * The most important features: Database, Game (code and logic)
  * The essential features: Database and the game

### Feature 1

Quiz-game (code and logic)
  * Description: A quiz game for nursing students in order to memorize drugs and medical knowledge
  * Requirements of the feature: The game requires the user to know the following about drugs: side effects, product names, intended use, administration, and conversion calculations
  * UI-View: [Mockup Model] (https://www.fluidui.com/editor/live/preview/p_fIQE7dpBAkkh3TOQBeByyqNViIChAl0E.1455521312492)
  * To be noted during testing: The game should be usable for medical students of all levels

### Feature 2

Database
  * Description: A drug database for the game
  * Requirements of the feature: Most common drugs should be featured
  * To be noted during testing: That it works as intended
 ![](http://student.labranet.jamk.fi/~H9142/projectdisp/dbplan.png)

## Use-Cases

User story | Actor | 
---|---|---
A nurse that is preparing for an IV-test.  | Nurse |

## Risks

| RISK ID |	DESCRIPTION | CONSEQUENCES | SE(V)ERITY | (P)ROBABILITY | (R)ISK FACTOR | WHO'S RESPONSIBLE? | SOLUTION |
|:----|:----|:----|:----|:----|:----|:----|:----|
| RISK01 | A member can't fulfill his duties on time | Sprint is delayed | V4 | P3 | R12 | Team Manager | Finish the previous tasks before the next sprint |
| RISK02 | Group doesn't understand what the client wants | Finished product doesn't match the client's expectations | V3 | P4 | R12| Project manager | Find out what has been understood correctly and start building on that |
| RISK03 | Timeschedule plannings are insufficient | Product is not finished on given delivery date | V3 | P3 | R9 | Team Member | Spread the work tasks evenly |
| RISK04 | A group member disappears | The project is delayed | V4 | P1 | R4 | All | Keep the rest of the group functional |
| RISK05 | A group member gets ill | The project is delayed | V3 | P3 | R9 | All | Try to patch the ill persons contribution |
| RISK06 | Project group can't share work tasks. | The project is delayed significantly | V5 | P2 | R10 | Project manager | 	Try to exploit the best aspects of the group members |
| RISK07 | Customer don't have time to meet | Problems to understand client | V4 | P2 | R8 | - | Try to get a meeting soon as possible |
| RISK08 | Customer disappears | The funding ends | V5 | P1 | R5 | Project manager | Actively try to have contact with the customer |


| Severity | Description |
|:----:|:----:|:----:|
| V1 | Minor, if the problem becomes recurring it affect the project |
| V2 | Can be perceived easily, affects the project but shouldn't hinder it |
| V3 | Significant, affects significantly on the project success and/or outcome, but the effect can be limited by the group |
| V4 | Serious, affects significantly on the project success and/or outcome |
| V5 | Extremely severe, destructive effect on the project |

| Probability | Description |
|:----:|:----:|:----:|
| P1 | Can be identified easily, but has a very slight probability |
| P2 | Clearly identified, but the probability is small |
| P3 | Medium, the probability has to be taken into consideration |
| P4 | Very likely probablity, has to be monitored regularly | 
| P5 | Certain to happen | 

Risk Factor (R) (V*P = R)

| Risk Factor | Description |
|:----:|:----:|:----:|
| R(0-6) | Small or unlikely risks | - | 
| R(7-12) | Should be taken into consideration | - | 
| R(13-19) | Has to be monitored, the situation has to be reported to the stakeholders, actions to minimize the risk should be taken | - | 
| R(20-25) | Actions to dimish the risk should be taken immediately | - | 


| Requirement ID | Description | Type | Division | Responsible | Priority | 
|:-----:|:-----:|:-----:|:-----:|:-----:|:-----:|
|RISK001| Sudden increase of the number of users, e.g during a exceptional situation | Practical | - | - | P1 |
|RISK002| The usability of the service getting weaker during heavy load | Practical | - | - | P5 |
|RISK003| The effect of a weak internet connection to the service | Practical | - | - | P3 |

  * How to read the tables: P1 = Very important, P3 = Relevant, P5 = Trivial

## Functional Requirements

  * In this section you can raise notable requirements that are good to keep in mind!

| Requirement ID | Description | Type | Division | Responsible | Priority |
|:-----:|:-----:|:-----:|:-----:|:-----:|:-----:|
|YVA0001| The service has to use a drug database | Technical | - | DB manager | P1 |
|YVA0002| The service has to be compatible with both mobile and desktop platforms | Technical | - | -| P1 |
|YVA0003| The service has to compatible with as many devices mobile devices as possible (the popular ones at least) | Technical | - | - | P2 |
|YVA0004| The game should be challenging for medical students of all levels | Technical | - | - | P3 |
|YVA0005| Database should include at least the most common drugs | Technical | - | DB manager | P1 |


## Identified Functional Requirements

| Requirement ID | Description | Type | Division | Responsible | Priority | 
|:-----:|:-----:|:-----:|:-----:|:-----:|:-----:|
|VAT0001| - | Practical | - | - | P3 |

  * How to read the tables: P1 = Very important, P3 = Relevant, P5 = Trivial


## Identified Non-Functional Requirements

| Requirement ID | Description | Type | Division | Responsible | Priority | 
|:-----:|:-----:|:-----:|:-----:|:-----:|:-----:|
|VAL001| The service should improve users on following skills: mathematics (conversions), logical thinking, ability to read pharmaceutical information | Practical | - | - | P1 |
|VAL002| The service should be in English | Practical | - | - | P3 |
|VAL003| The game should be challenging for medical students of all levels | Practical | - | - | P3 |

  * How to read the tables: P1 = Very important, P3 = Relevant, P5 = Trivial

## Technologies used on the project

  * Trello
  * Ganntter
  * Github
  * Slack
  * Whatsapp
  * Circle CI
  * Heroku
  * Doorbell
  * Commonkey
  * Zapier
  * PHP 5.3

# User interface prototype


### Prototype introduction

   * [FluidUI mockup](https://www.fluidui.com/editor/live/preview/p_fIQE7dpBAkkh3TOQBeByyqNViIChAl0E.1455521312492)
   * Mockup made with fluidUI. Presents basic idea of the game visually.

##  Publishing plan and prioritizing

* [Gannt Chart](https://drive.google.com/folderview?id=0B2lyrNivVw3rVDR3OWRuTVh1ckU&usp=sharing)

Functionality and implementation order

  * Feature 2 (Database) - March 2016
  * Feature 1 (Game) - April 2016

# Sources and additional information

* [Requirement specification template](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/vaatimusmaarittelu-pohja.md)
* [Project Plan](https://github.com/MikPak/Iaso/wiki/Project-plan)
* [Gannt Chart](https://drive.google.com/folderview?id=0B2lyrNivVw3rVDR3OWRuTVh1ckU&usp=sharing)
* [FluidUI mockup](https://www.fluidui.com/editor/live/preview/p_fIQE7dpBAkkh3TOQBeByyqNViIChAl0E.1455521312492)
* [Sprint backlog](https://github.com/JAMK-IT/IIZP2010-system-project/wiki/sprint-backlog)
