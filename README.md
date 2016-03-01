# kellehfish
PWP repository

### Milestone 1 Feedback

&#10008; Correctly set up the git/GitHub/PhpStorm toolchain.

&#10004; Create the directory structure for the project as outlined.

&#10004; Define a purpose, audience, and goal for your project.

&#10004; Create one Persona for your proposed project.

&#10004; Create one Use Case for your proposed project, based on the Persona.

Awesome work here. I'd like to talk with you a little bit to learn some more about Kelly Williams, and your ideas for her site. This will make a great PWP, and I'm looking forward to seeing it take shape. Adding a small gallery to display her works is certainly within scope as well. Your HTML and CSS looks good overall. There are some issues with your GitHub repository however. Overall, nice work! Your Milestone 1 passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

#### Edits/Suggestions
There are some issues with your GitHub repository:
- OH NO! There's a .idea folder in there! You'll need to delete this repo and re-create the project. Talk to any one of us (me, Skyler, or Dylan) if you need any guidance. No need to re-write any code, just copy/paste it from the current project.
- Move your CSS directory inside /public_html
- I don't see any of your image files in GitHub. Be sure all your image files are added to git and committed and pushed to your repository.
- Link to your internal resources (images, stylesheets) using relative links instead of absolute links. They will look something like this: <code>&lt;img src="img/allix.jpg" alt="Allix Cohen"&gt;</code>

### Milestone 2&alpha; Feedback

&#10004; Create a sitemap outlining the pages you plan to include in your PWP.

&#10004; Document a brief plan or strategy for your content that will support the overall purpose and goal of the site.

&#10004; Map out a simple interaction flow that details the steps a user must take to successfully use your site to acheive the goal.

&#10008; Create a mobile and desktop/laptop wireframe for each page layout.

Awesome job on this Milestone overall, but the mobile wireframes are missing. The layout that I see here will not work very well on mobile as is. Your sitemap, content strategy, and interaction flow are all very good. Don't forget that a simple contact form is required, so plan on integrating one into the contact page. We'll use php and Swiftmailer for this.

Integration with the [Instagram API](https://www.instagram.com/developer/) is out of scope for this project at this time, but might be worth exploring down the line if it offers the functionality you're looking for. The [Swipebox Gallery](http://brutaldesign.github.io/swipebox/) plugin is built in JavaScript/jQuery, and is a great, easy-to-implement, and mobile friendly way of creating an image gallery. There is also the built-in [Bootstrap Carousel](http://getbootstrap.com/javascript/#carousel).

Your HTML and CSS looks great!

Because mobile wireframes are missing, I can only pass this Milestone 2&alpha; at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) for now. Add mobile layout wireframes and I'll bump it to Tier II. You're clear to start development on your PWP.

#### Edits &amp; Suggestions
- move the /css /img and /php directories at the site root inside of /public_html, otherwise delete them if they are not in use.

### Milestone 2b Feedback
Take a look at the notes we went over below, and check in with me or Skyler this week. After some cleanup, you should be ready to deploy to ASO next week.

Your Milestone 2b passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

#### Edits &amp; Suggestions
- Fix directory structure.
- add contact form.
- clean up html, nav, sticky footer structure.
- clean up the CSS (one css file).
- look at this example for reference: https://bootcamp-coders.cnm.edu/~rlewis37/bootstrap-sandbox-2/


Set up ASO Host:
- Go over https://bootcamp-coders.cnm.edu/class-materials/php/email/, add composer.json and mailer.php
- enable shell access - chat live support and request them to enable this
- Add your public SSH key (CPanel, SSH Access)
- Add an email account, and add an email forwarder if you like :)
- Create a new deployment in PhpStorm that uploads to ASO, and upload your site there.
