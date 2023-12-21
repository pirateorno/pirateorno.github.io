from flask import Flask, render_template, url_for, request

app = Flask(__name__)

@app.route('/')
def main():
    return render_template('index.html')


@app.route('/projects/chat', methods=['GET', 'POST'])
def chat():
    if request.method == 'POST':
        user = request.form['user']
        text = request.form['text']

        banned_terms = ['/', 'https', 'com', 'http']

        for term in banned_terms:
            if term in user or term in text:
                return "Banned term detected. Message not sent."

        with open("messages.txt", "a") as messages:
            line_count = sum(1 for line in open("messages.txt"))

            if line_count >= 500:
                with open("messages.txt", "w"):
                    pass

            messages.write(f"\n{user}: {text}")

        return "Message sent successfully."

    else:
        with open("messages.txt", "r") as messages:
            content = messages.read()
            return render_template('projects/chat.html', content=content)


@app.errorhandler(404)
def page_not_found(e):
    return render_template('error-404.html'), 404


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8888)
