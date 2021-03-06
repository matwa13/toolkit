<extends:element/>

<block:assets>
    <asset:script href="resources/scripts/spiral/bundle.js"/>
</block:assets>

<block:form-class>${class} <?= (${ajax | true} ? 'js-spiral-form' : '') #compiled ?></block:form-class>
<!--
.form-content was added for blur effects
We can't set blur on form itself, because it will blur lockers(loaders) too.
-->
<block:body>
    <form action="${action}" method="${method|post}" enctype="multipart/form-data" accept-charset="UTF-8" class="${form-class}" node:attributes="exclude:form-class">
        <div class="form-content">
            ${context}
        </div>
    </form>
</block:body>