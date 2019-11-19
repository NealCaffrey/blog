<?php


namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class Simplemde extends Field
{

    protected $view = 'admin::form.editor';

    protected static $css = [
        '/packages/admin/simplemde/dist/simplemde.min.css',
    ];

    protected static $js = [
        '/packages/admin/simplemde/dist/simplemde.min.js',
        '/packages/bower_components/inline-attachment/src/inline-attachment.js',
        '/packages/bower_components/inline-attachment/src/codemirror.inline-attachment.js',
    ];

    public function render()
    {
        $this->script = <<<EOT
            var inlineAttachmentConfig = {
                uploadUrl: '/uploadImage',
                uploadFieldName: 'upload_file',
                jsonFieldName: 'file_path',
                progressText: '![图片上传中...]()',
                errorText: '图片上传失败',
                urlText:'![图片描述]({filename})',
                extraHeaders: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            };
            var simplemde = new SimpleMDE({
                autofocus: true,
                placeholder: '请使用 Markdown 编写',
                autosave: {
                    enabled: false,
                    delay: 50,
                    unique_id: "editor02",
                },
                spellChecker: false,
            });
            //这里是 inlineAttachment 的调用配置
            inlineAttachment.editors.codemirror4.attach(simplemde.codemirror, inlineAttachmentConfig);
EOT;
        return parent::render();

    }
}
