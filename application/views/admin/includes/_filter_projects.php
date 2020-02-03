<div class="row table-filter-container">
    <div class="col-sm-12">
        <?php echo form_open($form_action, ['method' => 'GET']); ?>

        <div class="item-table-filter" style="width: 80px; min-width: 80px;">
            <label><?php echo trans("show"); ?></label>
            <select name="show" class="form-control">
                <option value="15" <?php echo ($this->input->get('show', true) == '15') ? 'selected' : ''; ?>>15</option>
                <option value="30" <?php echo ($this->input->get('show', true) == '30') ? 'selected' : ''; ?>>30</option>
                <option value="60" <?php echo ($this->input->get('show', true) == '60') ? 'selected' : ''; ?>>60</option>
                <option value="100" <?php echo ($this->input->get('show', true) == '100') ? 'selected' : ''; ?>>100</option>
            </select>
        </div>

        <div class="item-table-filter">
            <label><?php echo trans("language"); ?></label>
            <select name="lang_id" class="form-control" onchange="get_categories_by_lang(this.value);">
                <option value=""><?php echo trans("all"); ?></option>
                <?php foreach ($languages as $language): ?>
                    <option value="<?php echo $language->id; ?>" <?php echo ($this->input->get('lang_id', true) == $language->id) ? 'selected' : ''; ?>><?php echo html_escape($language->name); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <?php if (user()->role == "admin"): ?>
            <div class="item-table-filter">
                <label><?php echo trans("author"); ?></label>
                <select name="author" class="form-control">
                    <option value=""><?php echo trans("all"); ?></option>
                    <?php foreach ($authors as $author): ?>
                        <option value="<?php echo $author->id; ?>"
                            <?php echo ($this->input->get('author', true) == $author->id) ? 'selected' : ''; ?>>
                            <?php echo html_escape($author->username); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        <?php endif; ?>

        <div class="item-table-filter">
            <label><?php echo trans("search"); ?></label>
            <input name="q" class="form-control" placeholder="Search" type="search" value="<?php echo html_escape($this->input->get('q', true)); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
        </div>

        <div class="item-table-filter md-top-10" style="width: 65px; min-width: 65px;">
            <label style="display: block">&nbsp;</label>
            <button type="submit" class="btn bg-purple"><?php echo trans("filter"); ?></button>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
