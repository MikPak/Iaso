# About the document

This document is a "living"-document, which is updates regularly. It is a rough requirement definition document's structure that can be used as a layout for requirement defining for various projects. The structure can, and will be edited! The goal is to create a document which merges service design and software design together seamlessly.

Regards: NarsuMan


## XXXXXX-service/software requirement definition

Document version number 0.5

### Material classification

Public

### Permission

This document is owned by JAMK University of Applied Sciences.

## Contents

**Table of Contents**
- [Introduction](#introduction)
- [Short product/service description/customer profile](#short-product-description-and-customer-profile)
- [Client](#client)
- [Schedule](#schedule)
- [Known stakeholders and customers of the service](#known-stakeholders-and-customers-of-the-service)
- [Customer Profiles](#customer-profiles)
- [Stakeholder map](#stakeholder-map)
- [General Customer Journey](#general-customer-journey)
- [Service Domain areas](#service-domain-areas)
- [The most vital Customer Journey Maps regarding the chosen client profiles](#the-most-vital-customer-journey-maps-regarding-the-chosen-client-profiles)
- [Customer Journey Map usage clientprofile_1 point of view](#customer-journey-map-usage-clientprofile_1-point-of-view)
- [Customer Journey Map usage clientprofile_2 point of view](#customer-journey-map-usage-clientprofile_2-point-of-view)
- [Customer Journey Map usage clientprofile_3 point of view](#customer-journey-map-usage-clientprofile_3-point-of-view)
- [The most important features](#the-most-important-features)
- [Feature 1](#feature-1)
- [Feature 2](#feature-2)
- [Use-Cases](#use-cases)
- [The most important use-cases as picture](#the-most-important-use-cases-as-picture)
- [Use-Case 1](#use-case-1)
- [Use-Case 2](#use-case-2)
- [Use-Case 3](#use-case-3)
- [Use-Case 4](#use-case-4)
- [Risks](#risks)
- [Functional Requirements](#functional-requirements)
- [Identified Functional Requirements](#identified-functional-requirements)
- [Identified Non-Functional Requirements](#identified-non-functional-requirements)
- [Usability](#usability)
- [User interface prototype](#user-interface-prototype)
- [Prototype introduction](#prototype-introduction)
- [Service architecture](#service-architecture)
- [Class proposal](#class-proposal)
- [Class Diagram](#class-diagram)
- [Sequence Diagram](#sequence-diagram)
- [Deployment diagram](#deployment-diagram)
- [Risk-based pre-testing plan](#risk-based-pre-testing-plan)
- [Known risks and test subjects](#known-risks-and-test-subjects)
- [Publishing plan and prioritizing](#publishing-plan-and-prioritizing)
- [Prioritizing](#prioritizing)
- [Standards and sources](#standards-and-sources)
- [Sources](#sources)

## Introduction

  * This document is for specifying the requirements for this project
  * This document is for an online quiz game for nursing students
  * This is a student project of second year Software Engineering students in JAMK University of Applied Sciences

### Short product description and customer profile

  * Service: An online quiz game for nursing students. The game improves deduction skills, mathematical skills, and the ability to read pharmaceutical information. 
  * Client story
  - //TO DO

### Client

  * Nursing department of JAMK University of Applied Sciences (Niilo Kuokkanen, Niilo.kuokkanen@jamk.fi)

### Schedule

| Waypoint | Begins | Ends | Sprint | 
|:-----:|:-----:|:-----:|:-----:|:-----:|
| Setting up the the tools for the project, translating documents | 11.1.2016 | 17.1.2016 | S1 |
| More translation work, customer Q&A  | 18.1.2016 | 24.1.2016 | S2 |
| Mockup sketch, more documentation (project plan, communication plan etc.), database planning  | 25.1.2016 | 31.2.2016 | S3 |
| Mockup implementation, requirement specs, project plan and contract  | 1.2.2016 | 6.2.2016 | S4 |
| Presenting the mockup, collecting feedback for evaluation, preview of the documentation | 7.2.2016 | 14.2.2016 | S5 |
| Ratifying the contracts and plans (signing the contract with the client), production begins | 15.2.2016 | 21.2.2016 | S6 |
| Fixing the contract if necessary, working on the project  | 22.2.2016 | 28.2.2016 | S7 |
| Inviting the client to a meeting, working on the project  | 29.2.2016 | 6.3.2016 | S8 |
| Executive committee meeting with the client, working of the project  | 7.3.2016 | 13.3.2016 | S9|
| Working on the project | 14.3.2016 | 20.3.2016 | S10 |
| Demos and collecting feedback, working on the project  | 21.3.2016 | 27.3.2016 | S11 |
| Fixing, testing, working on the project  | 28.3.2016 | 3.4.2016 | S12 |
| Fixing, testing, working on the project  | 4.4.2016 | 10.4.2016 | S13 |
| Finishing the project and presentation of the project  | 11.4.2016 | 17.4.2016 | S14 |
| The project is over  | 18.4.2016 | 18.4.2016 | S15 |

For more:
* [Gannt Chart] (https://drive.google.com/folderview?id=0B2lyrNivVw3rVDR3OWRuTVh1ckU&usp=sharing)
* [Sprint backlog] (https://github.com/JAMK-IT/IIZP2010-system-project/wiki/sprint-backlog )

## Known stakeholders and customers of the service

### Stakeholders

Supervisors :

* Marko ”NarsuMan” Rintamäki, Marko.rintamaki@jamk.fi
* Paavo Nelimarkka, Paavo.nelimarkka@jamk.fi 
* Matti Mieskolainen matti.mieskolainen@jamk.fi

Client : Niilo Kuokkanen, Niilo.kuokkanen@jamk.fi

## Customer Profiles

  * Client 1, First year Nursing student
  * Client 2, 2-3 year Nursing student
  * Client 3, Nursing student that has almost graduated, or has already graduated
  * [Link to customer profiles ](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/asiakasprofiilien_esimerkit.md)

## Stakeholder map

![](https://www.lucidchart.com/publicSegments/view/afbaa205-0924-40f8-a0a1-96e281aafcf5/image.png)

## General Customer Journey

![](https://camo.githubusercontent.com/1429ec848bc406a1bc7f38874188e4af03d3ee46/68747470733a2f2f7777772e64726f70626f782e636f6d2f732f6c6f7076357a6a6a337076676261392f757365725f6a6f75726e6579732d30322e706e673f646c3d31)

Covering the customer path, in which named stakeholder representatives are used

  *  [What is a customer path?](https://www.google.fi/search?q=palvelupolku&espv=2&biw=1626&bih=843&site=webhp&tbm=isch&tbo=u&source=univ&sa=X&ved=0ahUKEwjU3Kn22pnKAhWDWywKHWrDB-wQsAQIHA)


## Service Domain areas

Is there any different product versions to different environments, what?

  * Desktop version
  * Mobile version
  
Software sub-sections/blocks

  * Database
  * PHP/HTML
  * Business Logic
  * UI

## The most vital Customer Journey Maps regarding the chosen client profiles

  * Specifying the description to fit the project?
  // TO DO

### Customer Journey Map usage clientprofile_1 point of view

// TO DO

### Customer Journey Map usage clientprofile_2 point of view

// TO DO

### Customer Journey Map usage clientprofile_3 point of view

// TO DO

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

## Use-Cases

### The most important use-cases as picture

![](https://www.lucidchart.com/publicSegments/view/6994e113-aa9d-4eeb-ab5d-edc605b604ef/image.png)

### Use-case 1

   * [Registering](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/kayttotapauskuvauksen-pohja.md)

### Use-case 2

   * [Password change](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/kayttotapauskuvauksen-pohja.md)

### Use-case 3

   * [Example 3](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/kayttotapauskuvauksen-pohja.md)

### Use-case 4

   * [Example 4](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/kayttotapauskuvauksen-pohja.md)

## Risks

| RISK ID |	DESCRIPTION | CONSEQUENCES | SE(V)ERITY | (P)ROBABILITY | (R)ISK FACTOR | WHO'S RESPONSIBLE? | SOLUTION |
|:----|:----|:----|:----|:----|:----|:----|:----|
| RISK01 | A member can't fulfill his duties on time | Sprint is delayed | V4 | P3 | R12 | Team Manager | Finish the previous tasks before the next sprint |
| RISK02 | Group doesn't understand what the client wants | Finished product doesn't match the client's expectations | V3 | P4 | R12| | - | Find out what has been understood correctly and start building on that |
| RISK03 | Timeschedule plannings are insufficient | Product is not finished on given delivery date | V3 | P3 | R9 | Team Member | Spread the work tasks evenly |
| RISK04 | A group member disappears | The project is delayed | V4 | P1 | R4 | All | Keep the rest of the group functional |
| RISK05 | A group member gets ill | The project is delayed | V3 | P3 | R9 | All | Try to patch the ill persons contribution |
| RISK06 | Project group can't share work tasks. | The project is delayed significantly | V5 | P2 | R10 | - | 	Try to exploit the best aspects of the group members |
| RISK07 | Customer don't have time to meet | Problems to understand client | V4 | P2 | R8 | - | Try to get a meeting soon as possible |
| RISK08 | Customer disappears | The funding ends | V5 | P1 | R5 | - | Actively try to have contact with the customer |


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
|YVA0001| The service has to use a drug database | Technical | - | - | P1 |
|YVA0002| The service has to be compatible with both mobile and desktop platforms | Technical | - | - | P1 |
|YVA0003| The service has to compatible with as many devices mobile devices as possible (the popular ones at least) | Technical | - | - | P2 |
|YVA0004| The game should be challenging for medical students of all levels | Technical | - | - | P3 |
|YVA0005| Database should include at least the most common drugs | Technical | - | - | P1 |


## Identified Functional Requirements

| Requirement ID | Description | Type | Division | Responsible | Priority | 
|:-----:|:-----:|:-----:|:-----:|:-----:|:-----:|
|VAT0001| - | Practical | - | - | P3 |

  * How to read the tables: P1 = Very important, P3 = Relevant, P5 = Trivial


## Identified Non-Functional Requirements

  * [Examples of information security requirements](https://confluence.csc.fi/display/oppija/10.+Tietoturvavaatimukset)

| Requirement ID | Description | Type | Division | Responsible | Priority | 
|:-----:|:-----:|:-----:|:-----:|:-----:|:-----:|
|VAL001| The service should improve users on following skills: mathematics (conversions), logical thinking, ability to read pharmaceutical information | Practical | - | - | P1 |
|VAL002| The service should be in English | Practical | - | - | P3 |
|VAL003| The game should be challenging for medical students of all levels | Practical | - | - | P3 |

  * How to read the tables: P1 = Very important, P3 = Relevant, P5 = Trivial

### Usability

  * What has to be taken into consideration ?
  - // TO DO
  * Wishes of the client ?
  - // TO DO
  * Technological divisions/things that affect availability?
  - // TO DO

# User interface prototype


### Prototype introduction

   * Links to the prototype environment
   * Necessary information for the inspection of the prototype


## Service architecture

  * This section can be merged with technical designing
  * In regards of requirement definitions, it could be useful to describe the general implementation and problems associated with it.

![](https://camo.githubusercontent.com/5c169deb4debb278bb6219208f577843075ddab3/68747470733a2f2f7777772e64726f70626f782e636f6d2f732f6179707170797376726831316133312f636f6e747269626f6172642d6172636869746563747572652e706e673f646c3d31)

   * [Example from real life](https://confluence.csc.fi/display/OPHPALV/Koodistopalvelun+tekninen+dokumentaatio)

### Class proposal

  * Usually a part of a more detailed design
  * Can be referred with links...
  * Identified class proposals

![](https://www.lucidchart.com/publicSegments/view/16b2b5a7-f349-48bf-8efb-594521131e09/image.png)

### Class Diagram

  * Only a rough description necessary?

![](https://www.lucidchart.com/publicSegments/view/c680dd6c-6e68-43b7-bf6c-421bbe21a17c/image.png)

### Sequence Diagram

  * Sequence diagram is a convenient tool to present other things

![](https://en.wikipedia.org/wiki/File:CheckEmail.svg)

### Deployment diagram

  * In requirement defining this might be the most useful UML-depictions?
  * How the software/service will roughly work along with an older solution...
  * How the existing system will roughly work

![](https://www.lucidchart.com/publicSegments/view/6f727a36-f880-4dca-b5ac-133f6f860697/image.png)


## Risk-based pre-testing plan

### Known risks and test subjects

  * Risk -> The need to test
  * Requirement -> The need to test

##  Publishing plan and prioritizing

[Gannt Chart](https://drive.google.com/folderview?id=0B2lyrNivVw3rVDR3OWRuTVh1ckU&usp=sharing)

Publishing order isn't always linear. [Ks. Kriittinen polku](https://fi.wikipedia.org/wiki/Kriittinen_polku)
Althought sometimes it might feel like it:  [Release Plan](https://wiki.documentfoundation.org/ReleasePlan)

Functionality and implementation order

  * Feature 2 (Database) - March 2016
  * Feature 1 (Game) - April 2016

### Prioritizing


  * How to read the tables: P1 = Very important, P3 = Relevant, P5 = Trivial


## Standards and sources

-

# Sources

-

