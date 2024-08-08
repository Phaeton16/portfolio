<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Modal</title>
</head>
<body>


    <!-- <a id="openModal">Open Modal</a> -->
    <div id="myModal" class="modal">
        <div class="modal-content">

            <div class="heading">
            <div style="float: right;">
                <span class="close" onclick="closeModal()">&times;</span>
            </div>
                <h1>Your Feedback Helps Us Serve You Better</h1>
                <div class="heading-content">
                    <p style="text-align: justify;">Dear RMIS User, <br>
                        <br>We value your opinion and would love to know what you think about our services. Would you
                        mind
                        spare a few minutes to complete our feedback? It will help us better serve you in the the
                        future.
                    </p>
                </div>
            </div>
            <div class="content-title">
                <div class="title">
                    <strong style="font-size: 24px; margin-left: 0; padding-left: 0;">Overall experience with our
                        product/service:</strong>
                </div>
                <div class="icons">
                    <ul class="rating-name">
                        <li class="centered-text">
                            <div>
                                Very<br>Satisfied
                            </div>
                        </li>
                        <li class="centered-text">
                            <div>
                                Satisfied
                            </div>
                        </li>
                        <li class="centered-text">
                            <div>
                                Neutral
                            </div>
                        </li>
                        <li class="centered-text">
                            <div>
                                Dissatisfied
                            </div>
                        </li>
                        <li class="centered-text">
                            <div>
                                Very<br>Dissatisfied
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content" id="question1">
                <div class="title" style="display: flex;  ">
                    <div style="padding-right: 12px;">
                        <strong>A.</strong>
                    </div>
                    <div>
                        <strong>Responsiveness to queries/concerns:</strong>
                    </div>
                </div>
                <div class="icons">
                    <ul class="feedback">
                        <li class="happy" onclick="selectReaction('question1', 'happy')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                            </div>
                        </li>
                        <li class="good" onclick="selectReaction('question1', 'good')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="ok" onclick="selectReaction('question1', 'ok')">
                            <div></div>
                        </li>
                        <li class="sad" onclick="selectReaction('question1', 'sad')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="angry" onclick="selectReaction('question1', 'angry')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content" id="question2">
                <div class="title" style="display: flex; ">
                    <div style="padding-right: 12px;"><strong>B.</strong></div>
                    <div>
                        <strong>Quality of transaction of product/service:</strong>
                    </div>
                </div>
                <div class="icons">
                    <ul class="feedback">
                        <li class="happy" onclick="selectReaction('question2', 'happy')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                            </div>
                        </li>
                        <li class="good" onclick="selectReaction('question2', 'good')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="ok" onclick="selectReaction('question2', 'ok')">
                            <div></div>
                        </li>
                        <li class="sad" onclick="selectReaction('question2', 'sad')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="angry" onclick="selectReaction('question2', 'angry')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content" id="question3">
                <div class="title" style="display: flex; ">
                    <div style="padding-right: 12px;"><strong>C.</strong></div>
                    <di>
                        <strong>Accessibility of products/services:</strong>
                    </di>
                </div>
                <div class="icons">
                    <ul class="feedback">
                        <li class="happy" onclick="selectReaction('question3', 'happy')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                            </div>
                        </li>
                        <li class="good" onclick="selectReaction('question3', 'good')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="ok" onclick="selectReaction('question3', 'ok')">
                            <div></div>
                        </li>
                        <li class="sad" onclick="selectReaction('question3', 'sad')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="angry" onclick="selectReaction('question3', 'angry')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content" id="question4">
                <div class="title" style="display: flex; ">
                    <div style="padding-right: 12px;"><strong>D.</strong></div>
                    <div>
                        <strong>Clarity of processes:</strong>
                    </div>
                </div>
                <div class="icons">
                    <ul class="feedback">
                        <li class="happy" onclick="selectReaction('question4', 'happy')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                            </div>
                        </li>
                        <li class="good" onclick="selectReaction('question4', 'good')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="ok" onclick="selectReaction('question4', 'ok')">
                            <div></div>
                        </li>
                        <li class="sad" onclick="selectReaction('question4', 'sad')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="angry" onclick="selectReaction('question4', 'angry')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content" id="question5">
                <div class="title" style="display: flex; ">
                    <div style="padding-right: 12px;"><strong>E.</strong></div>
                    <div>
                        <strong>Cost of product/services:</strong>
                    </div>
                </div>
                <div class="icons">
                    <ul class="feedback">
                        <li class="happy" onclick="selectReaction('question5', 'happy')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                            </div>
                        </li>
                        <li class="good" onclick="selectReaction('question5', 'good')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="ok" onclick="selectReaction('question5', 'ok')">
                            <div></div>
                        </li>
                        <li class="sad" onclick="selectReaction('question5', 'sad')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="angry" onclick="selectReaction('question5', 'angry')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content" id="question6">
                <div class="title" style="display: flex; ">
                    <div style="padding-right: 12px;"><strong>F.</strong></div>
                    <div>
                        <strong>Fairness and Trustworthiness on the delivery of transactions:</strong>
                    </div>
                </div>
                <div class="icons">
                    <ul class="feedback">
                        <li class="happy" onclick="selectReaction('question6', 'happy')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                            </div>
                        </li>
                        <li class="good" onclick="selectReaction('question6', 'good')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="ok" onclick="selectReaction('question6', 'ok')">
                            <div></div>
                        </li>
                        <li class="sad" onclick="selectReaction('question6', 'sad')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="angry" onclick="selectReaction('question6', 'angry')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content" id="question7">
                <div class="title" style="display: flex; ">
                    <div style="padding-right: 12px;"><strong>G.</strong></div>
                    <div>
                        <strong>Knowledge or capability in delivering product/service:</strong>
                    </div>
                </div>
                <div class="icons">
                    <ul class="feedback">
                        <li class="happy" onclick="selectReaction('question7', 'happy')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                            </div>
                        </li>
                        <li class="good" onclick="selectReaction('question7', 'good')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="ok" onclick="selectReaction('question7', 'ok')">
                            <div></div>
                        </li>
                        <li class="sad" onclick="selectReaction('question7', 'sad')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="angry" onclick="selectReaction('question7', 'angry')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content" id="question8">
                <div class="title" style="display: flex; ">
                    <div style="padding-right: 12px;"><strong>H.</strong></div>
                    <div>
                        <strong>Timeliness on the completion of transaction:</strong>
                    </div>
                </div>
                <div class="icons">
                    <ul class="feedback">
                        <li class="happy" onclick="selectReaction('question8', 'happy')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                            </div>
                        </li>
                        <li class="good" onclick="selectReaction('question8', 'good')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="ok" onclick="selectReaction('question8', 'ok')">
                            <div></div>
                        </li>
                        <li class="sad" onclick="selectReaction('question8', 'sad')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="angry" onclick="selectReaction('question8', 'angry')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content" id="question9">
                <div class="title" style="display: flex; ">
                    <div style="padding-right: 12px;"><strong>I.&nbsp;</strong></div>
                    <div>
                        <strong>Overall rating:</strong>
                    </div>
                </div>
                <div class="icons">
                    <ul class="feedback">
                        <li class="happy" onclick="selectReaction('question9', 'happy')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                            </div>
                        </li>
                        <li class="good" onclick="selectReaction('question9', 'good')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="ok" onclick="selectReaction('question9', 'ok')">
                            <div></div>
                        </li>
                        <li class="sad" onclick="selectReaction('question9', 'sad')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                        <li class="angry" onclick="selectReaction('question9', 'angry')">
                            <div>
                                <svg class="eye left">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="eye right">
                                    <use xlink:href="#eye">
                                </svg>
                                <svg class="mouth">
                                    <use xlink:href="#mouth">
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="">
                <p><label class="text" for="comments"></label> <span style="font-weight: bold;">Comments or
                        Suggestions </span> on how we can improve the quality of our product/service?</p>

                <textarea name="comments" id="comments" maxlength="5000" oninput="getTextArea()" autofocus></textarea>
            </div>
            <div class="">
                <p style="font-weight: bold;"><label class="text" for="complaints"></label>Complaints (if there
                    are any):</p>

                <textarea name="complaints" id="complaints" maxlength="5000" oninput="getTextArea()" autofocus></textarea>
            </div>
            <div class="button">
                <button style="border: none;" class="preview" id="preview">Preview</button>
                <button class="submit" type="submit" id="submit">Submit</button>
            </div>
        </div>

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 4" id="eye">
            <path d="M1,1 C1.83333333,2.16666667 2.66666667,2.75 3.5,2.75 C4.33333333,2.75 5.16666667,2.16666667 6,1">
            </path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 7" id="mouth">
            <path d="M1,5.5 C3.66666667,2.5 6.33333333,1 9,1 C11.6666667,1 14.3333333,2.5 17,5.5"></path>
        </symbol>
    </svg>
</body>
</html>
