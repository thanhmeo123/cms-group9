wp.blocks.registerBlockType('brad/border-box', {
    title: 'Simple Box',
    icon: 'smiley',
    category: 'common',
    attributes: {
        content: { type: 'string' },
        color: { type: 'string' },
        err: { type: 'string' },
    },
    edit: function (props) {
        function checkGmail(e) {
            e.preventDefault();
            if (!checkValue(props.attributes.content)) {
                props.setAttributes({ err: 'Không phải gmail!' });
            } else {
                props.setAttributes({ err: '' });
            }
        }
        function checkValue(value) {
            let regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            return regex.test(value);
        }
        function updateContent(event) {
            props.setAttributes({ content: event.target.value })
        }
        return React.createElement(
            "form",
            null,
            React.createElement(
                "h3",
                null,
                "check Email"
            ),
            React.createElement('div', null, React.createElement("input", {
                type: "text", value:
                    props.attributes.content,
                placeholder: "Kiểm tra gmail ",
                onChange: updateContent,
            }), React.createElement('span', {
                style: { color: "red" }
            }, props.attributes.err)),
            React.createElement("button", {
                type: "submit",
                onClick: checkGmail,
            }, 'Check gmail')
        );
    },
    save: function (props) {
        return wp.element.createElement(
            "h3",
            {
                style: { border: "3px solid " + props.attributes.color }
            },
            props.attributes.content
        );
    }
})