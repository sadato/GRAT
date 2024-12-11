# GRAT
Html code to emulate a scratch-off Team Based Learning GRAT test and e-mail results to the teacher.
During a Team-Based Learning lesson, a fundamental step is the application of a Group Readiness Assessment Test (GRAT).
This was originally administered as a paper scratch-off test, and students got points according to the number of attempts necessary to solve each question, at the same time providing immediate feedback on all answers.
This is a simple html file that is capable of digitally emulating a scratch-off test and e-mailing students' answers to the teacher. Alternatively, test results for each team  may be sent to the teacher by a Telegram bot.



### Steps to Send Telegram Messages
#### Create a Telegram Bot:

- Open Telegram and search for the "BotFather."
- Start a chat with BotFather and use the /newbot command.
- Follow the instructions to create a new bot and get your Bot Token.

#### Get the Chat ID:

- Search for your bot in Telegram and start a conversation by sending a message to it.
- Use the Bot API to get your chat ID:
-  Open a browser and navigate to:

[https://api.telegram.org/bot<YourBotToken>/getUpdates](https://api.telegram.org/bot<YourBotToken>/getUpdates)

#### Replace <YourBotToken> with your bot's token.
- Look for your chat ID in the JSON response.
- Update the PHP Script: Replace the email logic with Telegram message sending logic using file_get_contents() or cURL.
