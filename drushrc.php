<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'standard',
  2 => 'common_install',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.23',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'user_form_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'trigger_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'file_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'rdf_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7078',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'node_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'node_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.23',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'openid_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.23',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'locale_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'block_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'field_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'list_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'profile' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'psr_0_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/psr_0_test/psr_0_test.module',
        'basename' => 'psr_0_test.module',
        'name' => 'psr_0_test',
        'info' => 
        array (
          'name' => 'PSR-0 Test cases',
          'description' => 'Test classes to be discovered by simpletest.',
          'core' => '7.x',
          'hidden' => true,
          'package' => 'Testing',
          'version' => '7.23',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'module_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'form_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'session_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update_test_2' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'file_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'path_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'image_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'database_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'ajax_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'common_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'filter_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update_test_3' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update_test_1' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.23',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'error_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'update_script_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'batch_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'menu_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.23',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud_hook_test.test',
            10 => 'tests/entity_query.test',
            11 => 'tests/error.test',
            12 => 'tests/file.test',
            13 => 'tests/filetransfer.test',
            14 => 'tests/form.test',
            15 => 'tests/graph.test',
            16 => 'tests/image.test',
            17 => 'tests/lock.test',
            18 => 'tests/mail.test',
            19 => 'tests/menu.test',
            20 => 'tests/module.test',
            21 => 'tests/pager.test',
            22 => 'tests/password.test',
            23 => 'tests/path.test',
            24 => 'tests/registry.test',
            25 => 'tests/schema.test',
            26 => 'tests/session.test',
            27 => 'tests/tablesort.test',
            28 => 'tests/theme.test',
            29 => 'tests/unicode.test',
            30 => 'tests/update.test',
            31 => 'tests/xmlrpc.test',
            32 => 'tests/upgrade/upgrade.test',
            33 => 'tests/upgrade/upgrade.comment.test',
            34 => 'tests/upgrade/upgrade.filter.test',
            35 => 'tests/upgrade/upgrade.forum.test',
            36 => 'tests/upgrade/upgrade.locale.test',
            37 => 'tests/upgrade/upgrade.menu.test',
            38 => 'tests/upgrade/upgrade.node.test',
            39 => 'tests/upgrade/upgrade.taxonomy.test',
            40 => 'tests/upgrade/upgrade.trigger.test',
            41 => 'tests/upgrade/upgrade.translatable.test',
            42 => 'tests/upgrade/upgrade.upload.test',
            43 => 'tests/upgrade/upgrade.user.test',
            44 => 'tests/upgrade/update.aggregator.test',
            45 => 'tests/upgrade/update.trigger.test',
            46 => 'tests/upgrade/update.field.test',
            47 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'image_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1375928238',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.23',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
        ),
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
        ),
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
        ),
        'project' => 'drupal',
        'version' => '7.23',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.23',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1375928238',
        ),
        'project' => 'drupal',
        'version' => '7.23',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.23',
        'description' => 'This platform is running Drupal 7.23',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/var/aegir/platforms/i20_platform/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.16',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1350508567',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.16',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/var/aegir/platforms/i20_platform/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.16',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1350508567',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.16',
      ),
      'common_install' => 
      array (
        'name' => 'common_install',
        'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/common_install.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'i20 commerce bootstrap',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.23',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'common',
            4 => 'contextual',
            5 => 'dashboard',
            6 => 'help',
            7 => 'image',
            8 => 'list',
            9 => 'menu',
            10 => 'number',
            11 => 'options',
            12 => 'path',
            13 => 'taxonomy',
            14 => 'dblog',
            15 => 'search',
            16 => 'shortcut',
            17 => 'toolbar',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
            21 => 'taxonomy_menu',
            22 => 'token',
            23 => 'php',
            24 => 'fe_block',
            25 => 'fe_nodequeue',
            26 => 'ckeditor',
            27 => 'jquery_update',
            28 => 'admin_menu',
            29 => 'admin_menu_toolbar',
            30 => 'asset',
            31 => 'ctools',
            32 => 'diff',
            33 => 'devel',
            34 => 'entity',
            35 => 'date',
            36 => 'datepicker',
            37 => 'datepicker_views',
            38 => 'features',
            39 => 'menu_block',
            40 => 'menu_position',
            41 => 'panels_everywhere',
            42 => 'panels',
            43 => 'pathauto',
            44 => 'strongarm',
            45 => 'views',
            46 => 'views_autocomplete_filters',
            47 => 'views_bulk_operations',
            48 => 'transliteration',
            49 => 'nodequeue',
            50 => 'asset_video',
            51 => 'date_views',
            52 => 'asset_gallery',
            53 => 'asset_freehtml',
            54 => 'bean',
            55 => 'metatag',
            56 => 'metatag_ui',
            57 => 'metatag_panels',
            58 => 'globalredirect',
            59 => 'elysia_cron',
            60 => 'piwik',
            61 => 'imagecache_actions',
            62 => 'imagecache_canvasactions',
            63 => 'rules',
            64 => 'rules_admin',
            65 => 'views_ui',
            66 => 'asset_widget',
            67 => 'datepicker',
            68 => 'emvideo',
            69 => 'field_group',
            70 => 'imagefield_crop',
            71 => 'asset_image',
            72 => 'common_assets',
            73 => 'content_taxonomy',
            74 => 'common_form_layouts',
            75 => 'module_filter',
            76 => 'addressfield',
            77 => 'views_megarow',
            78 => 'eva',
            79 => 'message',
            80 => 'message_notify',
            81 => 'inline_entity_form',
            82 => 'inline_conditions',
            83 => 'commerce',
            84 => 'commerce_message',
            85 => 'commerce_addressbook',
            86 => 'commerce_autosku',
            87 => 'commerce_backoffice',
            88 => 'commerce_checkout_progress',
            89 => 'commerce_checkout_redirect',
            90 => 'commerce_flat_rate',
            91 => 'commerce_shipping',
            92 => 'commerce_robokassa',
            93 => 'commerce_add_to_cart_confirmation',
            94 => 'commerce_discount',
            95 => 'commerce_backoffice_content',
            96 => 'commerce_backoffice_order',
            97 => 'commerce_backoffice_product',
            98 => 'commerce_order_ui',
            99 => 'commerce_product',
            100 => 'commerce_product_pricing',
            101 => 'commerce_product_ui',
            102 => 'commerce_cart',
            103 => 'commerce_cart',
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.23',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'features_extra_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/features_extra/tests/features_extra_test.module',
        'basename' => 'features_extra_test.module',
        'name' => 'features_extra_test',
        'info' => 
        array (
          'name' => 'Features Extra test feature',
          'description' => 'Test feature for Features Extra.',
          'core' => '7.x',
          'package' => 'Testing',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'block_class',
            1 => 'fe_block',
            2 => 'fe_nodequeue',
          ),
          'features' => 
          array (
            'fe_block_boxes' => 
            array (
              0 => 'features_extra_test_block',
            ),
            'fe_block_settings' => 
            array (
              0 => 'block-features_extra_test_block',
            ),
            'fe_nodequeue' => 
            array (
              0 => 'features_extra_test_nodequeue',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'features_extra',
          'datestamp' => '1366049112',
        ),
        'schema_version' => 0,
        'project' => 'features_extra',
        'version' => '7.x-1.0-beta1',
      ),
      'fe_block' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/features_extra/fe_block.module',
        'basename' => 'fe_block.module',
        'name' => 'fe_block',
        'info' => 
        array (
          'name' => 'FE Block',
          'description' => 'Build blocks and block settings as features.',
          'core' => '7.x',
          'package' => 'Features extra',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'ctools',
            2 => 'features',
          ),
          'test_dependencies' => 
          array (
            0 => 'block_class',
          ),
          'files' => 
          array (
            0 => 'tests/features_extra_test_case.test',
            1 => 'tests/fe_block.test',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'features_extra',
          'datestamp' => '1366049112',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'features_extra',
        'version' => '7.x-1.0-beta1',
      ),
      'fe_nodequeue' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/features_extra/fe_nodequeue.module',
        'basename' => 'fe_nodequeue.module',
        'name' => 'fe_nodequeue',
        'info' => 
        array (
          'name' => 'FE Nodequeue',
          'description' => 'Build nodequeues as features.',
          'core' => '7.x',
          'package' => 'Features extra',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'nodequeue',
          ),
          'files' => 
          array (
            0 => 'tests/features_extra_test_case.test',
            1 => 'tests/fe_nodequeue.test',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'features_extra',
          'datestamp' => '1366049112',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'features_extra',
        'version' => '7.x-1.0-beta1',
      ),
      'fe_profile' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/features_extra/fe_profile.module',
        'basename' => 'fe_profile.module',
        'name' => 'fe_profile',
        'info' => 
        array (
          'name' => 'FE Profile',
          'description' => 'Export profile field using features.',
          'core' => '7.x',
          'package' => 'Features extra',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'profile',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'features_extra',
          'datestamp' => '1366049112',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'features_extra',
        'version' => '7.x-1.0-beta1',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.views_default.inc',
            6 => 'includes/rules_scheduler.views.inc',
            7 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.3',
          'project' => 'rules',
          'datestamp' => '1364401818',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'rules',
        'version' => '7.x-2.3',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.3',
          'project' => 'rules',
          'datestamp' => '1364401818',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.3',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.3',
          'project' => 'rules',
          'datestamp' => '1364401818',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.3',
      ),
      'rules_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/rules/tests/rules_test.module',
        'basename' => 'rules_test.module',
        'name' => 'rules_test',
        'info' => 
        array (
          'name' => 'Rules Tests',
          'description' => 'Support module for the Rules tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_test.rules.inc',
            1 => 'rules_test.rules_defaults.inc',
          ),
          'hidden' => true,
          'version' => '7.x-2.3',
          'project' => 'rules',
          'datestamp' => '1364401818',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.3',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.processor.inc',
            5 => 'includes/rules.plugins.inc',
            6 => 'includes/rules.state.inc',
            7 => 'modules/php.eval.inc',
            8 => 'modules/rules_core.eval.inc',
            9 => 'modules/system.eval.inc',
            10 => 'ui/ui.controller.inc',
            11 => 'ui/ui.core.inc',
            12 => 'ui/ui.data.inc',
            13 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.3',
          'project' => 'rules',
          'datestamp' => '1364401818',
          'php' => '5.2.4',
        ),
        'schema_version' => '7209',
        'project' => 'rules',
        'version' => '7.x-2.3',
      ),
      'entity_test_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/entity/tests/entity_test_i18n.module',
        'basename' => 'entity_test_i18n.module',
        'name' => 'entity_test_i18n',
        'info' => 
        array (
          'name' => 'Entity-test type translation',
          'description' => 'Allows translating entity-test types.',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.1',
          'project' => 'entity',
          'datestamp' => '1367338216',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.1',
      ),
      'entity_feature' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/entity/tests/entity_feature.module',
        'basename' => 'entity_feature.module',
        'name' => 'entity_feature',
        'info' => 
        array (
          'name' => 'Entity feature module',
          'description' => 'Provides some entities in code.',
          'version' => '7.x-1.1',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_feature.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1367338216',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.1',
      ),
      'entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/entity/tests/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'entity_test',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'version' => '7.x-1.1',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_test.module',
            1 => 'entity_test.install',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1367338216',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.1',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'entity',
          'datestamp' => '1367338216',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entity',
        'version' => '7.x-1.1',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.1',
          'project' => 'entity',
          'datestamp' => '1367338216',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.1',
      ),
      'addressfield_example' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/addressfield/example/addressfield_example.module',
        'basename' => 'addressfield_example.module',
        'name' => 'addressfield_example',
        'info' => 
        array (
          'name' => 'Address Field Example',
          'description' => 'Example module for how to implement an addressfield format handler.',
          'core' => '7.x',
          'package' => 'Fields',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'addressfield',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'addressfield',
          'datestamp' => '1367945112',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'addressfield',
        'version' => '7.x-1.0-beta4',
      ),
      'addressfield' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/addressfield/addressfield.module',
        'basename' => 'addressfield.module',
        'name' => 'addressfield',
        'info' => 
        array (
          'name' => 'Address Field',
          'description' => 'Manage a flexible address field, implementing the xNAL standard.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/addressfield_views_handler_filter_country.inc',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'addressfield',
          'datestamp' => '1367945112',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'addressfield',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_context' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/metatag/metatag_context/metatag_context.module',
        'basename' => 'metatag_context.module',
        'name' => 'metatag_context',
        'info' => 
        array (
          'name' => 'Metatag: Context',
          'description' => 'Assigned Metatag using Context definitions, allowing them to be assigned by path and other criteria.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'metatag',
          ),
          'files' => 
          array (
            0 => 'metatag_context.test',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_opengraph' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/metatag/metatag_opengraph/metatag_opengraph.module',
        'basename' => 'metatag_opengraph.module',
        'name' => 'metatag_opengraph',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph',
          'description' => 'Provides support for open graph meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_twitter_cards' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
        'basename' => 'metatag_twitter_cards.module',
        'name' => 'metatag_twitter_cards',
        'info' => 
        array (
          'name' => 'Metatag: Twitter Cards',
          'description' => 'Provides support for Twitter\'s Card meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_panels' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/metatag/metatag_panels/metatag_panels.module',
        'basename' => 'metatag_panels.module',
        'name' => 'metatag_panels',
        'info' => 
        array (
          'name' => 'Metatag: Panels',
          'description' => 'Provides Metatag integration within the Panels interface.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'metatag',
            2 => 'panels',
            3 => 'token',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_views' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/metatag/metatag_views/metatag_views.module',
        'basename' => 'metatag_views.module',
        'name' => 'metatag_views',
        'info' => 
        array (
          'name' => 'Metatag: Views',
          'description' => 'Provides Metatag integration within the Views interface.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'metatag_views_plugin_display_extender_metatags.inc',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_ui' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/metatag/metatag_ui/metatag_ui.module',
        'basename' => 'metatag_ui.module',
        'name' => 'metatag_ui',
        'info' => 
        array (
          'name' => 'Meta tag UI',
          'description' => 'DEPRECATED admin interface for the Meta tag API, this functionality has be merged into the main module.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
            1 => 'ctools',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/metatag/tests/metatag_test.module',
        'basename' => 'metatag_test.module',
        'name' => 'metatag_test',
        'info' => 
        array (
          'name' => 'Meta Tag Test',
          'description' => 'Testing module for metatag.module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_dc' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/metatag/metatag_dc/metatag_dc.module',
        'basename' => 'metatag_dc.module',
        'name' => 'metatag_dc',
        'info' => 
        array (
          'name' => 'Metatag: Dublin Core',
          'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/metatag/metatag.module',
        'basename' => 'metatag.module',
        'name' => 'metatag',
        'info' => 
        array (
          'name' => 'Metatag',
          'description' => 'Adds support and an API to implement meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.15)',
            1 => 'ctools',
            2 => 'token',
          ),
          'configure' => 'admin/config/search/metatags',
          'files' => 
          array (
            0 => 'metatag.inc',
            1 => 'metatag.migrate.inc',
            2 => 'metatag.test',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => '7014',
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'elysia_cron' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/elysia_cron/elysia_cron.module',
        'basename' => 'elysia_cron.module',
        'name' => 'elysia_cron',
        'info' => 
        array (
          'name' => 'Elysia Cron',
          'description' => 'Extended cron support with crontab-like scheduling and other features.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'elysia_cron_update.php',
            1 => 'elysia_drupalconv.php',
          ),
          'configure' => 'admin/config/system/cron',
          'version' => '7.x-2.1',
          'project' => 'elysia_cron',
          'datestamp' => '1331658045',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '1',
        'project' => 'elysia_cron',
        'version' => '7.x-2.1',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.0',
          'project' => 'entityreference',
          'datestamp' => '1353230808',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.0',
      ),
      'entityreference' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
            8 => 'tests/entityreference.taxonomy.test',
            9 => 'tests/entityreference.admin.test',
          ),
          'version' => '7.x-1.0',
          'project' => 'entityreference',
          'datestamp' => '1353230808',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entityreference',
        'version' => '7.x-1.0',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_export_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/tests/ctools_export_test/ctools_export_test.module',
        'basename' => 'ctools_export_test.module',
        'name' => 'ctools_export_test',
        'info' => 
        array (
          'name' => 'CTools export test',
          'description' => 'CTools export test module',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'hidden' => true,
          'files' => 
          array (
            0 => 'ctools_export.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_plugin_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/tests/ctools_plugin_test.module',
        'basename' => 'ctools_plugin_test.module',
        'name' => 'ctools_plugin_test',
        'info' => 
        array (
          'name' => 'Chaos tools plugins test',
          'description' => 'Provides hooks for testing ctools plugins.',
          'package' => 'Chaos tool suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'ctools.plugins.test',
            1 => 'object_cache.test',
            2 => 'css.test',
            3 => 'context.test',
            4 => 'math_expression.test',
            5 => 'math_expression_stack.test',
          ),
          'hidden' => true,
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/math-expr.inc',
            2 => 'includes/stylizer.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6008',
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'piwik' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/piwik/piwik.module',
        'basename' => 'piwik.module',
        'name' => 'piwik',
        'info' => 
        array (
          'name' => 'Piwik Web analytics',
          'description' => 'Adds Piwik javascript tracking code to all your site\'s pages.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/piwik',
          'files' => 
          array (
            0 => 'piwik.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-2.4',
          'project' => 'piwik',
          'datestamp' => '1353789816',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'piwik',
        'version' => '7.x-2.4',
      ),
      'panels_mini' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/export_ui/panels_mini_ui.class.php',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'panels_node' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'configure' => 'admin/structure/panels',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_node.module',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/panels',
          'files' => 
          array (
            0 => 'panels_ipe.module',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'panels' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '7.x',
          'package' => 'Panels',
          'configure' => 'admin/structure/panels',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'panels.module',
            1 => 'includes/common.inc',
            2 => 'includes/legacy.inc',
            3 => 'includes/plugins.inc',
            4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'imagecache_customactions' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/imagecache_actions/customactions/imagecache_customactions.module',
        'basename' => 'imagecache_customactions.module',
        'name' => 'imagecache_customactions',
        'info' => 
        array (
          'name' => 'Imagecache Custom Actions',
          'description' => 'Allow direct PHP code manipulation of imagecache images.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'imagecache_customactions.install',
            1 => 'imagecache_customactions.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'imagecache_actions',
          'datestamp' => '1337423199',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0',
      ),
      'imagecache_coloractions' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/imagecache_actions/coloractions/imagecache_coloractions.module',
        'basename' => 'imagecache_coloractions.module',
        'name' => 'imagecache_coloractions',
        'info' => 
        array (
          'name' => 'Imagecache Color Actions',
          'description' => 'Additional ImageCache actions, providing color-shifting, brightness and alpha transparency effects.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'imagecache_coloractions.install',
            1 => 'imagecache_coloractions.module',
            2 => 'transparency.inc',
            3 => 'tests/green.imagecache_preset.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'imagecache_actions',
          'datestamp' => '1337423199',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0',
      ),
      'image_effects_text_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/imagecache_actions/image_effects_text/image_effects_text_test/image_effects_text_test.module',
        'basename' => 'image_effects_text_test.module',
        'name' => 'image_effects_text_test',
        'info' => 
        array (
          'name' => 'Image Effects Text test',
          'description' => 'Image effects that test the text effect',
          'core' => '7.x',
          'package' => 'Features',
          'version' => '7.x-1.0',
          'project' => 'imagecache_actions',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'image_effects_text',
          ),
          'features' => 
          array (
            'image' => 
            array (
              0 => 'text-rotate-test',
              1 => 'text-test',
            ),
          ),
          'datestamp' => '1337423199',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0',
      ),
      'image_effects_text' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/imagecache_actions/image_effects_text/image_effects_text.module',
        'basename' => 'image_effects_text.module',
        'name' => 'image_effects_text',
        'info' => 
        array (
          'name' => 'Image Text Effects',
          'description' => 'Display simple or dynamic captions on images.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'imagecache_actions',
          ),
          'version' => '7.x-1.0',
          'project' => 'imagecache_actions',
          'datestamp' => '1337423199',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0',
      ),
      'imagecache_autorotate' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/imagecache_actions/autorotate/imagecache_autorotate.module',
        'basename' => 'imagecache_autorotate.module',
        'name' => 'imagecache_autorotate',
        'info' => 
        array (
          'name' => 'Imagecache Autorotate',
          'description' => 'Autorotate image based on EXIF Orientation.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'files' => 
          array (
            0 => 'imagecache_autorotate.install',
            1 => 'imagecache_autorotate.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'imagecache_actions',
          'datestamp' => '1337423199',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0',
      ),
      'imagecache_testsuite' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/imagecache_actions/tests/imagecache_testsuite.module',
        'basename' => 'imagecache_testsuite.module',
        'name' => 'imagecache_testsuite',
        'info' => 
        array (
          'name' => 'Imagecache_actions Test Suite',
          'description' => 'Displays a collection of demo presets.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
          ),
          'features' => 
          array (
            'image' => 
            array (
              0 => 'corners_combo',
            ),
          ),
          'version' => '7.x-1.0',
          'project' => 'imagecache_actions',
          'datestamp' => '1337423199',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0',
      ),
      'imagecache_canvasactions' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/imagecache_actions/canvasactions/imagecache_canvasactions.module',
        'basename' => 'imagecache_canvasactions.module',
        'name' => 'imagecache_canvasactions',
        'info' => 
        array (
          'name' => 'Imagecache Canvas Actions',
          'description' => 'Actions for manipulating image canvases layers, including watermark and background effect. Also an aspect switcher (portrait/landscape)',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'canvasactions.inc',
            1 => 'imagecache_canvasactions.install',
            2 => 'imagecache_canvasactions.module',
            3 => 'rounded_corners.inc',
            4 => 'tests/cheap_dropshadow.imagecache_preset.inc',
            5 => 'tests/keyword_positioning.imagecache_preset.inc',
            6 => 'tests/positioned_underlay.imagecache_preset.inc',
            7 => 'tests/rotate_alpha.imagecache_preset.inc',
            8 => 'tests/rotate_alpha_gif.imagecache_preset.inc',
            9 => 'tests/rotate_scale.imagecache_preset.inc',
            10 => 'tests/rotate_scale_alpha.imagecache_preset.inc',
            11 => 'tests/rounded.imagecache_preset.inc',
            12 => 'tests/rounded_bl.imagecache_preset.inc',
            13 => 'tests/rounded_flattened.imagecache_preset.inc',
            14 => 'tests/watermark_100.imagecache_preset.inc',
            15 => 'tests/watermark_50.imagecache_preset.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'imagecache_actions',
          'datestamp' => '1337423199',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0',
      ),
      'imagecache_actions' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/imagecache_actions/imagecache_actions.module',
        'basename' => 'imagecache_actions.module',
        'name' => 'imagecache_actions',
        'info' => 
        array (
          'name' => 'Imagecache Actions',
          'description' => 'Provides a number of additional image effects.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'files' => 
          array (
            0 => 'ImageCacheActionsModuleStreamWrapper.php',
          ),
          'version' => '7.x-1.0',
          'project' => 'imagecache_actions',
          'datestamp' => '1337423199',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0',
      ),
      'panels_everywhere' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/panels_everywhere/panels_everywhere.module',
        'basename' => 'panels_everywhere.module',
        'name' => 'panels_everywhere',
        'info' => 
        array (
          'name' => 'Panels everywhere',
          'description' => 'Allow your site to use Panels instead of Blocks to lay out your pages.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
            1 => 'page_manager',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_everywhere.module',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'panels_everywhere',
          'datestamp' => '1342012935',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels_everywhere',
        'version' => '7.x-1.0-rc1',
      ),
      'date_context' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_tools' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_api' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_repeat_field' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_popup' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_repeat' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_views' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views_default.inc',
            5 => 'includes/date_views.views.inc',
            6 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_all_day' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'date_migrate',
            4 => 'features',
            5 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.6',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date_migrate/date_migrate.module',
        'basename' => 'date_migrate.module',
        'name' => 'date_migrate',
        'info' => 
        array (
          'name' => 'Date Migration',
          'description' => 'Provides support for importing into date fields with the Migrate module.',
          'core' => '7.x',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'date',
          ),
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'date_migrate.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_api.test',
            1 => 'tests/date.test',
            2 => 'tests/date_field.test',
            3 => 'tests/date_validation.test',
            4 => 'tests/date_timezone.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => '7004',
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'link' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.module',
            1 => 'link.migrate.inc',
            2 => 'tests/link.test',
            3 => 'tests/link.attribute.test',
            4 => 'tests/link.crud.test',
            5 => 'tests/link.crud_browser.test',
            6 => 'tests/link.token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'link',
          'datestamp' => '1360444361',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'link',
        'version' => '7.x-1.1',
      ),
      'globalredirect' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/globalredirect/globalredirect.module',
        'basename' => 'globalredirect.module',
        'name' => 'globalredirect',
        'info' => 
        array (
          'name' => 'Global Redirect',
          'description' => 'Searches for an alias of the current URL and 301 redirects if found. Stops duplicate content arising when path module is enabled.',
          'package' => 'Path management',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'globalredirect.test',
          ),
          'configure' => 'admin/config/system/globalredirect',
          'version' => '7.x-1.5',
          'project' => 'globalredirect',
          'datestamp' => '1339748779',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'globalredirect',
        'version' => '7.x-1.5',
      ),
      'ckeditor' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'ckeditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
          'core' => '7.x',
          'package' => 'User interface',
          'configure' => 'admin/config/content/ckeditor',
          'version' => '7.x-1.13',
          'project' => 'ckeditor',
          'datestamp' => '1365759619',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'ckeditor',
        'version' => '7.x-1.13',
      ),
      'filefield_paths' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/filefield_paths/filefield_paths.module',
        'basename' => 'filefield_paths.module',
        'name' => 'filefield_paths',
        'info' => 
        array (
          'name' => 'File (Field) Paths',
          'description' => 'Adds improved Token based file sorting and renaming functionalities.',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filefield_paths.install',
            1 => 'filefield_paths.module',
            2 => 'modules/features.inc',
            3 => 'modules/file.inc',
            4 => 'modules/filefield_paths.drush.inc',
            5 => 'modules/filefield_paths.inc',
            6 => 'modules/image.inc',
            7 => 'modules/token.inc',
            8 => 'modules/video.inc',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'filefield_paths',
          'datestamp' => '1366871711',
          'php' => '5.2.4',
        ),
        'schema_version' => '7107',
        'project' => 'filefield_paths',
        'version' => '7.x-1.0-beta4',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/views/tests/views_test.module',
        'basename' => 'views_test.module',
        'name' => 'views_test',
        'info' => 
        array (
          'name' => 'Views Test',
          'description' => 'Test module for Views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'hidden' => true,
          'version' => '7.x-3.7',
          'project' => 'views',
          'datestamp' => '1365499236',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.7',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_result.inc',
            2 => 'handlers/views_handler_area_text.inc',
            3 => 'handlers/views_handler_area_text_custom.inc',
            4 => 'handlers/views_handler_area_view.inc',
            5 => 'handlers/views_handler_argument.inc',
            6 => 'handlers/views_handler_argument_date.inc',
            7 => 'handlers/views_handler_argument_formula.inc',
            8 => 'handlers/views_handler_argument_many_to_one.inc',
            9 => 'handlers/views_handler_argument_null.inc',
            10 => 'handlers/views_handler_argument_numeric.inc',
            11 => 'handlers/views_handler_argument_string.inc',
            12 => 'handlers/views_handler_argument_group_by_numeric.inc',
            13 => 'handlers/views_handler_field.inc',
            14 => 'handlers/views_handler_field_counter.inc',
            15 => 'handlers/views_handler_field_boolean.inc',
            16 => 'handlers/views_handler_field_contextual_links.inc',
            17 => 'handlers/views_handler_field_custom.inc',
            18 => 'handlers/views_handler_field_date.inc',
            19 => 'handlers/views_handler_field_entity.inc',
            20 => 'handlers/views_handler_field_markup.inc',
            21 => 'handlers/views_handler_field_math.inc',
            22 => 'handlers/views_handler_field_numeric.inc',
            23 => 'handlers/views_handler_field_prerender_list.inc',
            24 => 'handlers/views_handler_field_time_interval.inc',
            25 => 'handlers/views_handler_field_serialized.inc',
            26 => 'handlers/views_handler_field_machine_name.inc',
            27 => 'handlers/views_handler_field_url.inc',
            28 => 'handlers/views_handler_filter.inc',
            29 => 'handlers/views_handler_filter_boolean_operator.inc',
            30 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            31 => 'handlers/views_handler_filter_combine.inc',
            32 => 'handlers/views_handler_filter_date.inc',
            33 => 'handlers/views_handler_filter_equality.inc',
            34 => 'handlers/views_handler_filter_entity_bundle.inc',
            35 => 'handlers/views_handler_filter_group_by_numeric.inc',
            36 => 'handlers/views_handler_filter_in_operator.inc',
            37 => 'handlers/views_handler_filter_many_to_one.inc',
            38 => 'handlers/views_handler_filter_numeric.inc',
            39 => 'handlers/views_handler_filter_string.inc',
            40 => 'handlers/views_handler_relationship.inc',
            41 => 'handlers/views_handler_relationship_groupwise_max.inc',
            42 => 'handlers/views_handler_sort.inc',
            43 => 'handlers/views_handler_sort_date.inc',
            44 => 'handlers/views_handler_sort_formula.inc',
            45 => 'handlers/views_handler_sort_group_by_numeric.inc',
            46 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            47 => 'handlers/views_handler_sort_random.inc',
            48 => 'includes/base.inc',
            49 => 'includes/handlers.inc',
            50 => 'includes/plugins.inc',
            51 => 'includes/view.inc',
            52 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            53 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            55 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            56 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            59 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            60 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            61 => 'modules/book/views_plugin_argument_default_book_root.inc',
            62 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            63 => 'modules/comment/views_handler_field_comment.inc',
            64 => 'modules/comment/views_handler_field_comment_depth.inc',
            65 => 'modules/comment/views_handler_field_comment_link.inc',
            66 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            67 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            68 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            69 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            70 => 'modules/comment/views_handler_field_comment_node_link.inc',
            71 => 'modules/comment/views_handler_field_comment_username.inc',
            72 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            73 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            74 => 'modules/comment/views_handler_field_node_comment.inc',
            75 => 'modules/comment/views_handler_field_node_new_comments.inc',
            76 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            77 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            78 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            79 => 'modules/comment/views_handler_filter_node_comment.inc',
            80 => 'modules/comment/views_handler_sort_comment_thread.inc',
            81 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            82 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            83 => 'modules/comment/views_plugin_row_comment_rss.inc',
            84 => 'modules/comment/views_plugin_row_comment_view.inc',
            85 => 'modules/contact/views_handler_field_contact_link.inc',
            86 => 'modules/field/views_handler_field_field.inc',
            87 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            88 => 'modules/field/views_handler_argument_field_list.inc',
            89 => 'modules/field/views_handler_argument_field_list_string.inc',
            90 => 'modules/field/views_handler_filter_field_list.inc',
            91 => 'modules/filter/views_handler_field_filter_format_name.inc',
            92 => 'modules/locale/views_handler_field_node_language.inc',
            93 => 'modules/locale/views_handler_filter_node_language.inc',
            94 => 'modules/locale/views_handler_argument_locale_group.inc',
            95 => 'modules/locale/views_handler_argument_locale_language.inc',
            96 => 'modules/locale/views_handler_field_locale_group.inc',
            97 => 'modules/locale/views_handler_field_locale_language.inc',
            98 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            99 => 'modules/locale/views_handler_filter_locale_group.inc',
            100 => 'modules/locale/views_handler_filter_locale_language.inc',
            101 => 'modules/locale/views_handler_filter_locale_version.inc',
            102 => 'modules/node/views_handler_argument_dates_various.inc',
            103 => 'modules/node/views_handler_argument_node_language.inc',
            104 => 'modules/node/views_handler_argument_node_nid.inc',
            105 => 'modules/node/views_handler_argument_node_type.inc',
            106 => 'modules/node/views_handler_argument_node_vid.inc',
            107 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            108 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            109 => 'modules/node/views_handler_field_node.inc',
            110 => 'modules/node/views_handler_field_node_link.inc',
            111 => 'modules/node/views_handler_field_node_link_delete.inc',
            112 => 'modules/node/views_handler_field_node_link_edit.inc',
            113 => 'modules/node/views_handler_field_node_revision.inc',
            114 => 'modules/node/views_handler_field_node_revision_link.inc',
            115 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            116 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            117 => 'modules/node/views_handler_field_node_path.inc',
            118 => 'modules/node/views_handler_field_node_type.inc',
            119 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            120 => 'modules/node/views_handler_filter_node_access.inc',
            121 => 'modules/node/views_handler_filter_node_status.inc',
            122 => 'modules/node/views_handler_filter_node_type.inc',
            123 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            124 => 'modules/node/views_plugin_argument_default_node.inc',
            125 => 'modules/node/views_plugin_argument_validate_node.inc',
            126 => 'modules/node/views_plugin_row_node_rss.inc',
            127 => 'modules/node/views_plugin_row_node_view.inc',
            128 => 'modules/profile/views_handler_field_profile_date.inc',
            129 => 'modules/profile/views_handler_field_profile_list.inc',
            130 => 'modules/profile/views_handler_filter_profile_selection.inc',
            131 => 'modules/search/views_handler_argument_search.inc',
            132 => 'modules/search/views_handler_field_search_score.inc',
            133 => 'modules/search/views_handler_filter_search.inc',
            134 => 'modules/search/views_handler_sort_search_score.inc',
            135 => 'modules/search/views_plugin_row_search_view.inc',
            136 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            137 => 'modules/system/views_handler_argument_file_fid.inc',
            138 => 'modules/system/views_handler_field_file.inc',
            139 => 'modules/system/views_handler_field_file_extension.inc',
            140 => 'modules/system/views_handler_field_file_filemime.inc',
            141 => 'modules/system/views_handler_field_file_uri.inc',
            142 => 'modules/system/views_handler_field_file_status.inc',
            143 => 'modules/system/views_handler_filter_file_status.inc',
            144 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            145 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            146 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            147 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            148 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            149 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            150 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            151 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            152 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            153 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            154 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            155 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            156 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            157 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            158 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            159 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            160 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            161 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            162 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            163 => 'modules/system/views_handler_filter_system_type.inc',
            164 => 'modules/translation/views_handler_argument_node_tnid.inc',
            165 => 'modules/translation/views_handler_field_node_link_translate.inc',
            166 => 'modules/translation/views_handler_field_node_translation_link.inc',
            167 => 'modules/translation/views_handler_filter_node_tnid.inc',
            168 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            169 => 'modules/translation/views_handler_relationship_translation.inc',
            170 => 'modules/user/views_handler_argument_user_uid.inc',
            171 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            172 => 'modules/user/views_handler_field_user.inc',
            173 => 'modules/user/views_handler_field_user_language.inc',
            174 => 'modules/user/views_handler_field_user_link.inc',
            175 => 'modules/user/views_handler_field_user_link_cancel.inc',
            176 => 'modules/user/views_handler_field_user_link_edit.inc',
            177 => 'modules/user/views_handler_field_user_mail.inc',
            178 => 'modules/user/views_handler_field_user_name.inc',
            179 => 'modules/user/views_handler_field_user_permissions.inc',
            180 => 'modules/user/views_handler_field_user_picture.inc',
            181 => 'modules/user/views_handler_field_user_roles.inc',
            182 => 'modules/user/views_handler_filter_user_current.inc',
            183 => 'modules/user/views_handler_filter_user_name.inc',
            184 => 'modules/user/views_handler_filter_user_permissions.inc',
            185 => 'modules/user/views_handler_filter_user_roles.inc',
            186 => 'modules/user/views_plugin_argument_default_current_user.inc',
            187 => 'modules/user/views_plugin_argument_default_user.inc',
            188 => 'modules/user/views_plugin_argument_validate_user.inc',
            189 => 'modules/user/views_plugin_row_user_view.inc',
            190 => 'plugins/views_plugin_access.inc',
            191 => 'plugins/views_plugin_access_none.inc',
            192 => 'plugins/views_plugin_access_perm.inc',
            193 => 'plugins/views_plugin_access_role.inc',
            194 => 'plugins/views_plugin_argument_default.inc',
            195 => 'plugins/views_plugin_argument_default_php.inc',
            196 => 'plugins/views_plugin_argument_default_fixed.inc',
            197 => 'plugins/views_plugin_argument_default_raw.inc',
            198 => 'plugins/views_plugin_argument_validate.inc',
            199 => 'plugins/views_plugin_argument_validate_numeric.inc',
            200 => 'plugins/views_plugin_argument_validate_php.inc',
            201 => 'plugins/views_plugin_cache.inc',
            202 => 'plugins/views_plugin_cache_none.inc',
            203 => 'plugins/views_plugin_cache_time.inc',
            204 => 'plugins/views_plugin_display.inc',
            205 => 'plugins/views_plugin_display_attachment.inc',
            206 => 'plugins/views_plugin_display_block.inc',
            207 => 'plugins/views_plugin_display_default.inc',
            208 => 'plugins/views_plugin_display_embed.inc',
            209 => 'plugins/views_plugin_display_extender.inc',
            210 => 'plugins/views_plugin_display_feed.inc',
            211 => 'plugins/views_plugin_display_page.inc',
            212 => 'plugins/views_plugin_exposed_form_basic.inc',
            213 => 'plugins/views_plugin_exposed_form.inc',
            214 => 'plugins/views_plugin_exposed_form_input_required.inc',
            215 => 'plugins/views_plugin_localization_core.inc',
            216 => 'plugins/views_plugin_localization.inc',
            217 => 'plugins/views_plugin_localization_none.inc',
            218 => 'plugins/views_plugin_pager.inc',
            219 => 'plugins/views_plugin_pager_full.inc',
            220 => 'plugins/views_plugin_pager_mini.inc',
            221 => 'plugins/views_plugin_pager_none.inc',
            222 => 'plugins/views_plugin_pager_some.inc',
            223 => 'plugins/views_plugin_query.inc',
            224 => 'plugins/views_plugin_query_default.inc',
            225 => 'plugins/views_plugin_row.inc',
            226 => 'plugins/views_plugin_row_fields.inc',
            227 => 'plugins/views_plugin_row_rss_fields.inc',
            228 => 'plugins/views_plugin_style.inc',
            229 => 'plugins/views_plugin_style_default.inc',
            230 => 'plugins/views_plugin_style_grid.inc',
            231 => 'plugins/views_plugin_style_list.inc',
            232 => 'plugins/views_plugin_style_jump_menu.inc',
            233 => 'plugins/views_plugin_style_mapping.inc',
            234 => 'plugins/views_plugin_style_rss.inc',
            235 => 'plugins/views_plugin_style_summary.inc',
            236 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            237 => 'plugins/views_plugin_style_summary_unformatted.inc',
            238 => 'plugins/views_plugin_style_table.inc',
            239 => 'tests/handlers/views_handler_area_text.test',
            240 => 'tests/handlers/views_handler_argument_null.test',
            241 => 'tests/handlers/views_handler_argument_string.test',
            242 => 'tests/handlers/views_handler_field.test',
            243 => 'tests/handlers/views_handler_field_boolean.test',
            244 => 'tests/handlers/views_handler_field_custom.test',
            245 => 'tests/handlers/views_handler_field_counter.test',
            246 => 'tests/handlers/views_handler_field_date.test',
            247 => 'tests/handlers/views_handler_field_file_size.test',
            248 => 'tests/handlers/views_handler_field_math.test',
            249 => 'tests/handlers/views_handler_field_url.test',
            250 => 'tests/handlers/views_handler_field_xss.test',
            251 => 'tests/handlers/views_handler_filter_combine.test',
            252 => 'tests/handlers/views_handler_filter_date.test',
            253 => 'tests/handlers/views_handler_filter_equality.test',
            254 => 'tests/handlers/views_handler_filter_in_operator.test',
            255 => 'tests/handlers/views_handler_filter_numeric.test',
            256 => 'tests/handlers/views_handler_filter_string.test',
            257 => 'tests/handlers/views_handler_sort_random.test',
            258 => 'tests/handlers/views_handler_sort_date.test',
            259 => 'tests/handlers/views_handler_sort.test',
            260 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            261 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            262 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            263 => 'tests/plugins/views_plugin_display.test',
            264 => 'tests/styles/views_plugin_style_jump_menu.test',
            265 => 'tests/styles/views_plugin_style.test',
            266 => 'tests/styles/views_plugin_style_base.test',
            267 => 'tests/styles/views_plugin_style_mapping.test',
            268 => 'tests/styles/views_plugin_style_unformatted.test',
            269 => 'tests/views_access.test',
            270 => 'tests/views_analyze.test',
            271 => 'tests/views_basic.test',
            272 => 'tests/views_argument_default.test',
            273 => 'tests/views_argument_validator.test',
            274 => 'tests/views_exposed_form.test',
            275 => 'tests/field/views_fieldapi.test',
            276 => 'tests/views_glossary.test',
            277 => 'tests/views_groupby.test',
            278 => 'tests/views_handlers.test',
            279 => 'tests/views_module.test',
            280 => 'tests/views_pager.test',
            281 => 'tests/views_plugin_localization_test.inc',
            282 => 'tests/views_translatable.test',
            283 => 'tests/views_query.test',
            284 => 'tests/views_upgrade.test',
            285 => 'tests/views_test.views_default.inc',
            286 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            287 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            288 => 'tests/node/views_node_revision_relations.test',
            289 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            290 => 'tests/user/views_handler_field_user_name.test',
            291 => 'tests/user/views_user_argument_default.test',
            292 => 'tests/user/views_user_argument_validate.test',
            293 => 'tests/user/views_user.test',
            294 => 'tests/views_cache.test',
            295 => 'tests/views_view.test',
            296 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.7',
          'project' => 'views',
          'datestamp' => '1365499236',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.7',
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.7',
          'project' => 'views',
          'datestamp' => '1365499236',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.7',
      ),
      'nodequeue_service' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/nodequeue/addons/nodequeue_service/nodequeue_service.module',
        'basename' => 'nodequeue_service.module',
        'name' => 'nodequeue_service',
        'info' => 
        array (
          'name' => 'Nodequeue Service',
          'description' => 'Provides a nodequeue service.',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'nodequeue',
          ),
          'files' => 
          array (
            0 => 'nodequeue_service.inc',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'nodequeue' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/nodequeue/nodequeue.module',
        'basename' => 'nodequeue.module',
        'name' => 'nodequeue',
        'info' => 
        array (
          'name' => 'Nodequeue',
          'description' => 'Create queues which can contain nodes in arbitrary order',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'configure' => 'admin/structure/nodequeue/settings',
          'files' => 
          array (
            0 => 'includes/views/nodequeue.views.inc',
            1 => 'includes/nodequeue.actions.inc',
            2 => 'includes/views/nodequeue_handler_argument_subqueue_qid.inc',
            3 => 'includes/views/nodequeue_handler_field_all_queues.inc',
            4 => 'includes/views/nodequeue_handler_field_all_subqueues.inc',
            5 => 'includes/views/nodequeue_handler_field_links.inc',
            6 => 'includes/views/nodequeue_handler_field_queue_tab.inc',
            7 => 'includes/views/nodequeue_handler_filter_in_queue.inc',
            8 => 'includes/views/nodequeue_handler_relationship_nodequeue.inc',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'smartqueue' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/nodequeue/smartqueue.module',
        'basename' => 'smartqueue.module',
        'name' => 'smartqueue',
        'info' => 
        array (
          'name' => 'Smartqueue taxonomy',
          'description' => 'Creates a node queue for each taxonomy vocabulary',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'nodequeue',
            1 => 'taxonomy',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'nodequeue_generate' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/nodequeue/nodequeue_generate.module',
        'basename' => 'nodequeue_generate.module',
        'name' => 'nodequeue_generate',
        'info' => 
        array (
          'name' => 'Nodequeue generate',
          'description' => 'Bulk assign nodes into queues for quickly populating a site.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'nodequeue',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'nodequeue_generate.module',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'imagefield_crop' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/imagefield_crop/imagefield_crop.module',
        'basename' => 'imagefield_crop.module',
        'name' => 'imagefield_crop',
        'info' => 
        array (
          'name' => 'Image crop',
          'description' => 'Add cropping ability to images using javascript',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'files' => 
          array (
            0 => 'imagefield_crop.module',
          ),
          'version' => '7.x-1.1',
          'project' => 'imagefield_crop',
          'datestamp' => '1360049318',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagefield_crop',
        'version' => '7.x-1.1',
      ),
      'token_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'field_group' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Fieldgroup',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_group.install',
            1 => 'field_group.module',
            2 => 'field_group.field_ui.inc',
            3 => 'field_group.form.inc',
            4 => 'field_group.features.inc',
            5 => 'field_group.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'field_group',
          'datestamp' => '1319051133',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'field_group',
        'version' => '7.x-1.1',
      ),
      'features_test' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/features/tests/features_test/features_test.module',
        'basename' => 'features_test.module',
        'name' => 'features_test',
        'info' => 
        array (
          'name' => 'Features Tests',
          'description' => 'Test module for Features testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'php' => '5.2.0',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'strongarm',
            3 => 'taxonomy',
            4 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_features_test',
            ),
            'field_instance' => 
            array (
              0 => 'node-features_test-field_features_test',
            ),
            'filter' => 
            array (
              0 => 'features_test',
            ),
            'image' => 
            array (
              0 => 'features_test',
            ),
            'node' => 
            array (
              0 => 'features_test',
            ),
            'taxonomy' => 
            array (
              0 => 'taxonomy_features_test',
            ),
            'user_permission' => 
            array (
              0 => 'create features_test content',
            ),
            'views_view' => 
            array (
              0 => 'features_test',
            ),
          ),
          'hidden' => '1',
          'version' => '7.x-2.0-rc2',
          'project' => 'features',
          'datestamp' => '1375464067',
        ),
        'schema_version' => 0,
        'project' => 'features',
        'version' => '7.x-2.0-rc2',
      ),
      'features' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.0-rc2',
          'project' => 'features',
          'datestamp' => '1375464067',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-2.0-rc2',
      ),
      'strongarm' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'strongarm',
          'datestamp' => '1339604214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'strongarm',
        'version' => '7.x-2.0',
      ),
      'module_filter' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-1.8',
          'project' => 'module_filter',
          'datestamp' => '1375995220',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'module_filter',
        'version' => '7.x-1.8',
      ),
      'transliteration' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/transliteration/transliteration.module',
        'basename' => 'transliteration.module',
        'name' => 'transliteration',
        'info' => 
        array (
          'name' => 'Transliteration',
          'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
          'core' => '7.x',
          'configure' => 'admin/config/media/file-system',
          'version' => '7.x-3.1',
          'project' => 'transliteration',
          'datestamp' => '1338540713',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'transliteration',
        'version' => '7.x-3.1',
      ),
      'diff' => 
      array (
        'filename' => '/var/aegir/platforms/i20_platform/sites/all/modules/contrib/diff/diff.module',
        'basename' => 'diff.module',
        'name' => 'diff',
        'info' => 
        array (
          'name' => 'Diff',
          'description' => 'Show differences between content revisions.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'DiffEngine.php',
          ),
          'version' => '7.x-3.2',
          'project' => 'diff',
          'datestamp' => '1352784357',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7305',
        'project' => 'diff',
        'version' => '7.x-3.2',
      ),
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'common_install' => 
    array (
      'modules' => 
      array (
        'commerce_addressbook' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_addressbook/commerce_addressbook.module',
          'basename' => 'commerce_addressbook.module',
          'name' => 'commerce_addressbook',
          'info' => 
          array (
            'name' => 'Commerce Addressbook',
            'description' => 'Prepopulates and provides a dropdown for previously added addresses.',
            'package' => 'Commerce (contrib)',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'commerce_customer',
            ),
            'version' => '7.x-2.0-rc7',
            'project' => 'commerce_addressbook',
            'datestamp' => '1369004411',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'project' => 'commerce_addressbook',
          'version' => '7.x-2.0-rc7',
        ),
        'eva' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/eva/eva.module',
          'basename' => 'eva.module',
          'name' => 'eva',
          'info' => 
          array (
            'name' => 'Eva',
            'description' => 'Provides a Views display type that can be attached to entities.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'package' => 'Views',
            'files' => 
            array (
              0 => 'eva_plugin_display_entity.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'eva',
            'datestamp' => '1343701935',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'eva',
          'version' => '7.x-1.2',
        ),
        'commerce_message' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_message/commerce_message.module',
          'basename' => 'commerce_message.module',
          'name' => 'commerce_message',
          'info' => 
          array (
            'name' => 'Commerce Message',
            'description' => 'Provides message history and order confirmation messages.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_order',
              1 => 'commerce_cart',
              2 => 'entityreference',
              3 => 'entity_token',
              4 => 'message',
              5 => 'message_notify',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_message_handler_area_add_message.inc',
            ),
            'version' => '7.x-1.0-rc1',
            'project' => 'commerce_message',
            'datestamp' => '1368810911',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_message',
          'version' => '7.x-1.0-rc1',
        ),
        'views_autocomplete_filters' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/views_autocomplete_filters/views_autocomplete_filters.module',
          'basename' => 'views_autocomplete_filters.module',
          'name' => 'views_autocomplete_filters',
          'info' => 
          array (
            'name' => 'Views Autocomplete Filters',
            'description' => 'Views Autocomplete Filters',
            'package' => 'Views',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'files' => 
            array (
              0 => 'views_autocomplete_filters.module',
              1 => 'views_autocomplete_filters.views.inc',
              2 => 'views_autocomplete_filters_handler_filter_string.inc',
            ),
            'version' => '7.x-1.0',
            'project' => 'views_autocomplete_filters',
            'datestamp' => '1374920487',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views_autocomplete_filters',
          'version' => '7.x-1.0',
        ),
        'inline_conditions' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/inline_conditions/inline_conditions.module',
          'basename' => 'inline_conditions.module',
          'name' => 'inline_conditions',
          'info' => 
          array (
            'name' => 'Inline Conditions',
            'description' => 'Manage frequently used conditions through an attached field.',
            'package' => 'Rules',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'version' => '7.x-1.0-alpha1',
            'project' => 'inline_conditions',
            'datestamp' => '1375433173',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'inline_conditions',
          'version' => '7.x-1.0-alpha1',
        ),
        'taxonomy_menu' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/taxonomy_menu/taxonomy_menu.module',
          'basename' => 'taxonomy_menu.module',
          'name' => 'taxonomy_menu',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'taxonomy',
              1 => 'menu',
            ),
            'description' => 'Adds links to taxonomy terms to a menu.',
            'name' => 'Taxonomy menu',
            'package' => 'Taxonomy menu',
            'files' => 
            array (
              0 => 'taxonomy_menu.batch.inc',
              1 => 'taxonomy_menu.database.inc',
              2 => 'taxonomy_menu.module',
              3 => 'taxonomy_menu.test',
              4 => 'taxonomy_menu.install',
            ),
            'version' => '7.x-1.4',
            'project' => 'taxonomy_menu',
            'datestamp' => '1346896425',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'taxonomy_menu',
          'version' => '7.x-1.4',
        ),
        'inline_entity_form' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/inline_entity_form/inline_entity_form.module',
          'basename' => 'inline_entity_form.module',
          'name' => 'inline_entity_form',
          'info' => 
          array (
            'name' => 'Inline Entity Form',
            'description' => 'Provides a widget for inline management (creation, modification, removal) of referenced entities. ',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'system (>7.14)',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/entity.inline_entity_form.inc',
              1 => 'includes/node.inline_entity_form.inc',
              2 => 'includes/taxonomy_term.inline_entity_form.inc',
              3 => 'includes/commerce_product.inline_entity_form.inc',
              4 => 'includes/commerce_line_item.inline_entity_form.inc',
            ),
            'version' => '7.x-1.3',
            'project' => 'inline_entity_form',
            'datestamp' => '1374540993',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'inline_entity_form',
          'version' => '7.x-1.3',
        ),
        'commerce_checkout_redirect' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_checkout_redirect/commerce_checkout_redirect.module',
          'basename' => 'commerce_checkout_redirect.module',
          'name' => 'commerce_checkout_redirect',
          'info' => 
          array (
            'name' => 'Commerce Checkout Redirect',
            'description' => 'Force anonymous users to login before being able to checkout.',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_checkout',
            ),
            'core' => '7.x',
            'version' => '7.x-2.0-beta1',
            'project' => 'commerce_checkout_redirect',
            'datestamp' => '1360767327',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_checkout_redirect',
          'version' => '7.x-2.0-beta1',
        ),
        'menu_block_export' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/menu_block/menu_block_export.module',
          'basename' => 'menu_block_export.module',
          'name' => 'menu_block_export',
          'info' => 
          array (
            'name' => 'Menu Block Export',
            'description' => 'Provides export interface for Menu block module.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'menu_block',
            ),
            'files' => 
            array (
              0 => 'menu_block_export.module',
              1 => 'menu_block_export.admin.inc',
            ),
            'configure' => 'admin/config/user-interface/menu-block/export',
            'version' => '7.x-2.3',
            'project' => 'menu_block',
            'datestamp' => '1328286646',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'menu_block',
          'version' => '7.x-2.3',
        ),
        'menu_block' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/menu_block/menu_block.module',
          'basename' => 'menu_block.module',
          'name' => 'menu_block',
          'info' => 
          array (
            'name' => 'Menu Block',
            'description' => 'Provides configurable blocks of menu items.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'menu (>7.11)',
            ),
            'files' => 
            array (
              0 => 'menu_block.module',
              1 => 'menu_block.admin.inc',
              2 => 'menu_block.follow.inc',
              3 => 'menu_block.pages.inc',
              4 => 'menu_block.sort.inc',
              5 => 'menu_block.install',
              6 => 'plugins/content_types/menu_tree/menu_tree.inc',
            ),
            'configure' => 'admin/config/user-interface/menu-block',
            'version' => '7.x-2.3',
            'project' => 'menu_block',
            'datestamp' => '1328286646',
            'php' => '5.2.4',
          ),
          'schema_version' => '7202',
          'project' => 'menu_block',
          'version' => '7.x-2.3',
        ),
        'commerce_checkout_progress' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_checkout_progress/commerce_checkout_progress.module',
          'basename' => 'commerce_checkout_progress.module',
          'name' => 'commerce_checkout_progress',
          'info' => 
          array (
            'name' => 'Commerce Checkout Progress',
            'description' => 'Provides an ordered list which shows the Commerce checkout progress, from start to completion.',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_checkout',
            ),
            'configure' => 'admin/commerce/config/checkout',
            'core' => '7.x',
            'version' => '7.x-1.2',
            'project' => 'commerce_checkout_progress',
            'datestamp' => '1341583883',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'commerce_checkout_progress',
          'version' => '7.x-1.2',
        ),
        'datepicker_views' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/datepicker/datepicker_views/datepicker_views.module',
          'basename' => 'datepicker_views.module',
          'name' => 'datepicker_views',
          'info' => 
          array (
            'name' => 'Date Picker Views',
            'description' => 'Provides views integration for the Datepicker module.',
            'package' => 'Date/Time',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'datepicker',
              1 => 'date_views',
            ),
            'files' => 
            array (
              0 => 'datepicker_views_filter_handler.inc',
            ),
            'version' => '7.x-1.0',
            'project' => 'datepicker',
            'datestamp' => '1371448251',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'datepicker',
          'version' => '7.x-1.0',
        ),
        'datepicker_block' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/datepicker/datepicker_block/datepicker_block.module',
          'basename' => 'datepicker_block.module',
          'name' => 'datepicker_block',
          'info' => 
          array (
            'name' => 'Date Picker Block',
            'description' => 'Provides a block with a date filter that can be used to filter a view.',
            'package' => 'Date/Time',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'datepicker',
            ),
            'version' => '7.x-1.0',
            'project' => 'datepicker',
            'datestamp' => '1371448251',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'datepicker',
          'version' => '7.x-1.0',
        ),
        'datepicker' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/datepicker/datepicker.module',
          'basename' => 'datepicker.module',
          'name' => 'datepicker',
          'info' => 
          array (
            'name' => 'Date Picker',
            'description' => 'Allows date popups to be displayed as inline datepickers.',
            'package' => 'Date/Time',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'date_popup',
            ),
            'version' => '7.x-1.0',
            'project' => 'datepicker',
            'datestamp' => '1371448251',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'datepicker',
          'version' => '7.x-1.0',
        ),
        'commerce_add_to_cart_confirmation' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_add_to_cart_confirmation/commerce_add_to_cart_confirmation.module',
          'basename' => 'commerce_add_to_cart_confirmation.module',
          'name' => 'commerce_add_to_cart_confirmation',
          'info' => 
          array (
            'name' => 'Commerce add to cart confirmation',
            'description' => 'Provides an "add to cart" confirmation screen.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_cart',
              1 => 'commerce_product_ui',
              2 => 'views',
              3 => 'rules',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/commerce_add_to_cart_confirmation.css',
              ),
            ),
            'scripts' => 
            array (
              0 => 'js/commerce_add_to_cart_confirmation.js',
            ),
            'version' => '7.x-1.0-rc2',
            'project' => 'commerce_add_to_cart_confirmation',
            'datestamp' => '1360857057',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_add_to_cart_confirmation',
          'version' => '7.x-1.0-rc2',
        ),
        'bean_all' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/bean/bean_all/bean_all.module',
          'basename' => 'bean_all.module',
          'name' => 'bean_all',
          'info' => 
          array (
            'name' => 'Bean All',
            'description' => 'Integrate all blocks with beans.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/all.inc',
            ),
            'dependencies' => 
            array (
              0 => 'bean',
            ),
            'package' => 'Bean',
            'version' => '7.x-1.2',
            'project' => 'bean',
            'datestamp' => '1368983112',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'project' => 'bean',
          'version' => '7.x-1.2',
        ),
        'bean_uuid' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/bean/bean_uuid/bean_uuid.module',
          'basename' => 'bean_uuid.module',
          'name' => 'bean_uuid',
          'info' => 
          array (
            'name' => 'Bean UUID',
            'description' => 'Allow deploying bean blocks through Deploy and UUID modules.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'bean',
              1 => 'uuid',
            ),
            'package' => 'Bean',
            'version' => '7.x-1.2',
            'project' => 'bean',
            'datestamp' => '1368983112',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'bean',
          'version' => '7.x-1.2',
        ),
        'bean_admin_ui' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/bean/bean_admin_ui/bean_admin_ui.module',
          'basename' => 'bean_admin_ui.module',
          'name' => 'bean_admin_ui',
          'info' => 
          array (
            'name' => 'Bean Admin UI',
            'description' => 'Add the ability to create Block Types in the UI',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'bean_admin_ui.module',
              1 => 'plugins/BeanCustom.class.php',
            ),
            'dependencies' => 
            array (
              0 => 'bean',
            ),
            'configure' => 'admin/structure/block-types',
            'package' => 'Bean',
            'version' => '7.x-1.2',
            'project' => 'bean',
            'datestamp' => '1368983112',
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'project' => 'bean',
          'version' => '7.x-1.2',
        ),
        'bean_entitycache' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/bean/bean_entitycache/bean_entitycache.module',
          'basename' => 'bean_entitycache.module',
          'name' => 'bean_entitycache',
          'info' => 
          array (
            'name' => 'Bean - Entitycache',
            'description' => 'Integrates the Bean module with the Entitycache module',
            'core' => '7.x',
            'package' => 'Performance and scalability',
            'dependencies' => 
            array (
              0 => 'bean',
              1 => 'entitycache',
            ),
            'version' => '7.x-1.2',
            'project' => 'bean',
            'datestamp' => '1368983112',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'bean',
          'version' => '7.x-1.2',
        ),
        'bean_usage' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/bean/bean_usage/bean_usage.module',
          'basename' => 'bean_usage.module',
          'name' => 'bean_usage',
          'info' => 
          array (
            'name' => 'Bean Usage',
            'description' => 'View Bean (Block Entities) Usage',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'bean',
              1 => 'blockreference',
            ),
            'package' => 'Bean',
            'version' => '7.x-1.2',
            'project' => 'bean',
            'datestamp' => '1368983112',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'bean',
          'version' => '7.x-1.2',
        ),
        'bean_test' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/bean/tests/bean_test.module',
          'basename' => 'bean_test.module',
          'name' => 'bean_test',
          'info' => 
          array (
            'name' => 'Bean Test',
            'description' => 'Creates test plugins for bean',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'bean',
            ),
            'files' => 
            array (
              0 => 'bean_test.module',
            ),
            'hidden' => true,
            'version' => '7.x-1.2',
            'project' => 'bean',
            'datestamp' => '1368983112',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'bean',
          'version' => '7.x-1.2',
        ),
        'bean' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/bean/bean.module',
          'basename' => 'bean.module',
          'name' => 'bean',
          'info' => 
          array (
            'name' => 'Bean',
            'description' => 'Create Bean (Block Entities)',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/bean.core.inc',
              1 => 'includes/bean.info.inc',
              2 => 'plugins/BeanPlugin.class.php',
              3 => 'plugins/BeanDefault.class.php',
              4 => 'includes/translation.handler.bean.inc',
              5 => 'views/views_handler_filter_bean_type.inc',
              6 => 'views/views_handler_field_bean_type.inc',
              7 => 'views/views_handler_field_bean_edit_link.inc',
              8 => 'views/views_handler_field_bean_delete_link.inc',
              9 => 'views/views_handler_field_bean_operations.inc',
              10 => 'bean.test',
            ),
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'ctools',
            ),
            'package' => 'Bean',
            'version' => '7.x-1.2',
            'project' => 'bean',
            'datestamp' => '1368983112',
            'php' => '5.2.4',
          ),
          'schema_version' => '7012',
          'project' => 'bean',
          'version' => '7.x-1.2',
        ),
        'commerce_flat_rate' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_flat_rate/commerce_flat_rate.module',
          'basename' => 'commerce_flat_rate.module',
          'name' => 'commerce_flat_rate',
          'info' => 
          array (
            'name' => 'Flat Rate',
            'description' => 'Allows you to define any number of flat rate shipping services for customers to choose during checkout.',
            'package' => 'Commerce (shipping)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_shipping',
              2 => 'commerce_shipping_ui',
            ),
            'core' => '7.x',
            'version' => '7.x-1.0-beta2',
            'project' => 'commerce_flat_rate',
            'datestamp' => '1353122757',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_flat_rate',
          'version' => '7.x-1.0-beta2',
        ),
        'commerce_features' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_features/commerce_features.module',
          'basename' => 'commerce_features.module',
          'name' => 'commerce_features',
          'info' => 
          array (
            'name' => 'Commerce Features',
            'description' => 'Features integration for Drupal Commerce module',
            'package' => 'Features',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'commerce',
            ),
            'version' => '7.x-1.0-rc1',
            'project' => 'commerce_features',
            'datestamp' => '1347835911',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_features',
          'version' => '7.x-1.0-rc1',
        ),
        'message_og_example' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/message/message_og_example/message_og_example.module',
          'basename' => 'message_og_example.module',
          'name' => 'message_og_example',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'entityreference',
              1 => 'features',
              2 => 'list',
              3 => 'message',
              4 => 'message_example',
              5 => 'og',
              6 => 'views',
            ),
            'description' => 'Message integration with Organic groups example.',
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'message-example_og_post_in_group-field_node_groups_ref',
                1 => 'message-example_og_post_in_group-field_node_ref',
                2 => 'message-example_og_post_in_group-field_published',
                3 => 'message-example_og_user_membership-field_node_groups_ref',
                4 => 'message-example_og_user_membership-field_published',
              ),
              'message_type' => 
              array (
                0 => 'example_og_post_in_group',
                1 => 'example_og_user_membership',
              ),
              'views_view' => 
              array (
                0 => 'message_og_example',
              ),
            ),
            'name' => 'Message OG example',
            'package' => 'Message',
            'php' => '5.2.4',
            'version' => '7.x-1.9',
            'project' => 'message',
            'datestamp' => '1374541036',
          ),
          'schema_version' => 0,
          'project' => 'message',
          'version' => '7.x-1.9',
        ),
        'message_example' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/message/message_example/message_example.module',
          'basename' => 'message_example.module',
          'name' => 'message_example',
          'info' => 
          array (
            'name' => 'Message example',
            'description' => 'Message example.',
            'core' => '7.x',
            'package' => 'Message',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'entity_token',
              1 => 'entityreference',
              2 => 'features',
              3 => 'list',
              4 => 'message',
              5 => 'strongarm',
              6 => 'token',
              7 => 'views',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/message_example.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'field' => 
              array (
                0 => 'message-example_create_comment-field_comment_ref',
                1 => 'message-example_create_comment-field_node_ref',
                2 => 'message-example_create_comment-field_published',
                3 => 'message-example_create_node-field_node_ref',
                4 => 'message-example_create_node-field_published',
                5 => 'message-example_user_register-field_published',
              ),
              'message_type' => 
              array (
                0 => 'example_create_comment',
                1 => 'example_create_node',
                2 => 'example_user_register',
              ),
              'variable' => 
              array (
                0 => 'field_bundle_settings_message__example_create_comment',
                1 => 'field_bundle_settings_message__example_create_node',
                2 => 'field_bundle_settings_message__example_user_register',
              ),
              'views_view' => 
              array (
                0 => 'message_example',
              ),
            ),
            'version' => '7.x-1.9',
            'project' => 'message',
            'datestamp' => '1374541036',
          ),
          'schema_version' => 0,
          'project' => 'message',
          'version' => '7.x-1.9',
        ),
        'message' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/message/message.module',
          'basename' => 'message.module',
          'name' => 'message',
          'info' => 
          array (
            'name' => 'Message',
            'description' => 'A general message logging utility.',
            'core' => '7.x',
            'package' => 'Message',
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'files' => 
            array (
              0 => 'message.info.inc',
              1 => 'includes/message.admin.inc',
              2 => 'includes/message.exception.inc',
              3 => 'includes/message.message_type_category.inc',
              4 => 'includes/message.message_type.inc',
              5 => 'includes/message.message.inc',
              6 => 'message.test',
              7 => 'includes/views/message.views.inc',
              8 => 'includes/views/handlers/message_handler_field_message_render.inc',
              9 => 'includes/views/handlers/message_handler_filter_message_type.inc',
              10 => 'includes/views/handlers/message_handler_filter_message_type_category.inc',
            ),
            'version' => '7.x-1.9',
            'project' => 'message',
            'datestamp' => '1374541036',
            'php' => '5.2.4',
          ),
          'schema_version' => '7012',
          'project' => 'message',
          'version' => '7.x-1.9',
        ),
        'jquery_update' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/jquery_update/jquery_update.module',
          'basename' => 'jquery_update.module',
          'name' => 'jquery_update',
          'info' => 
          array (
            'name' => 'jQuery Update',
            'description' => 'Update jQuery and jQuery UI to a more recent version.',
            'package' => 'User interface',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'jquery_update.module',
              1 => 'jquery_update.install',
            ),
            'configure' => 'admin/config/development/jquery_update',
            'version' => '7.x-2.3',
            'project' => 'jquery_update',
            'datestamp' => '1360375905',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'project' => 'jquery_update',
          'version' => '7.x-2.3',
        ),
        'references_dialog' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/references_dialog/references_dialog.module',
          'basename' => 'references_dialog.module',
          'name' => 'references_dialog',
          'info' => 
          array (
            'name' => 'References dialog',
            'description' => 'Enhances references fields by adding dialogs for adding and creating entities.',
            'package' => 'Fields',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'views',
            ),
            'files' => 
            array (
              0 => 'views/references_dialog_plugin_display.inc',
            ),
            'version' => '7.x-1.0-alpha4',
            'project' => 'references_dialog',
            'datestamp' => '1338453702',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'references_dialog',
          'version' => '7.x-1.0-alpha4',
        ),
        'message_notify_example' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/message_notify/message_notify_example/message_notify_example.module',
          'basename' => 'message_notify_example.module',
          'name' => 'message_notify_example',
          'info' => 
          array (
            'name' => 'Message notify example',
            'description' => 'Message notify example',
            'core' => '7.x',
            'package' => 'Message',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'entity_token',
              1 => 'entityreference',
              2 => 'features',
              3 => 'message',
              4 => 'message_notify',
              5 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'message-comment_insert-field_comment_ref',
                1 => 'message-comment_insert-field_message_rendered_body',
                2 => 'message-comment_insert-field_message_rendered_subject',
              ),
              'message_type' => 
              array (
                0 => 'comment_insert',
              ),
              'views_view' => 
              array (
                0 => 'message_notify_example',
              ),
            ),
            'version' => '7.x-2.5',
            'project' => 'message_notify',
            'datestamp' => '1366630876',
          ),
          'schema_version' => 0,
          'project' => 'message_notify',
          'version' => '7.x-2.5',
        ),
        'message_notify_test' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/message_notify/tests/message_notify_test.module',
          'basename' => 'message_notify_test.module',
          'name' => 'message_notify_test',
          'info' => 
          array (
            'name' => 'Message notify test module',
            'description' => 'Functionality to assist Message notify testing.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'message_notify',
            ),
            'hidden' => true,
            'files' => 
            array (
              0 => 'plugins/notifier/MessageNotifierTest.class.php',
            ),
            'version' => '7.x-2.5',
            'project' => 'message_notify',
            'datestamp' => '1366630876',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'message_notify',
          'version' => '7.x-2.5',
        ),
        'message_notify' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/message_notify/message_notify.module',
          'basename' => 'message_notify.module',
          'name' => 'message_notify',
          'info' => 
          array (
            'name' => 'Message notify',
            'description' => 'Message notify.',
            'core' => '7.x',
            'package' => 'Message',
            'dependencies' => 
            array (
              0 => 'message',
              1 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'includes/message_notify.exception.inc',
              1 => 'plugins/notifier/abstract.inc',
              2 => 'message_notify.test',
            ),
            'version' => '7.x-2.5',
            'project' => 'message_notify',
            'datestamp' => '1366630876',
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'project' => 'message_notify',
          'version' => '7.x-2.5',
        ),
        'commerce_autosku' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_autosku/commerce_autosku.module',
          'basename' => 'commerce_autosku.module',
          'name' => 'commerce_autosku',
          'info' => 
          array (
            'name' => 'Commerce AutoSKU',
            'description' => 'Automatically Creates the SKU of a product using tokens.',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_product',
              1 => 'ctools',
            ),
            'test_dependencies' => 
            array (
              0 => 'commerce_product_ui',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'commerce_autosku.test',
            ),
            'version' => '7.x-1.1+6-dev',
            'project' => 'commerce_autosku',
            'datestamp' => '1364431327',
            'php' => '5.2.4',
          ),
          'schema_version' => '7103',
          'project' => 'commerce_autosku',
          'version' => '7.x-1.1+6-dev',
        ),
        'commerce_shipping_example' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_shipping/modules/commerce_shipping_example.module',
          'basename' => 'commerce_shipping_example.module',
          'name' => 'commerce_shipping_example',
          'info' => 
          array (
            'name' => 'Shipping Method Example',
            'description' => 'Provides an example shipping method for testing and development.',
            'package' => 'Commerce (shipping)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_shipping',
            ),
            'core' => '7.x',
            'version' => '7.x-2.0',
            'project' => 'commerce_shipping',
            'datestamp' => '1353011121',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_shipping',
          'version' => '7.x-2.0',
        ),
        'commerce_shipping' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_shipping/commerce_shipping.module',
          'basename' => 'commerce_shipping.module',
          'name' => 'commerce_shipping',
          'info' => 
          array (
            'name' => 'Shipping',
            'description' => 'Implement core shipping features for Drupal commerce.',
            'package' => 'Commerce (shipping)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_line_item',
              2 => 'commerce_payment',
              3 => 'list',
              4 => 'rules',
            ),
            'core' => '7.x',
            'version' => '7.x-2.0',
            'project' => 'commerce_shipping',
            'datestamp' => '1353011121',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'project' => 'commerce_shipping',
          'version' => '7.x-2.0',
        ),
        'commerce_shipping_ui' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_shipping/commerce_shipping_ui.module',
          'basename' => 'commerce_shipping_ui.module',
          'name' => 'commerce_shipping_ui',
          'info' => 
          array (
            'name' => 'Shipping UI',
            'description' => 'Provides an interface for viewing and managing shipping methods and services.',
            'package' => 'Commerce (shipping)',
            'dependencies' => 
            array (
              0 => 'rules',
              1 => 'commerce',
              2 => 'commerce_shipping',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/shipping',
            'version' => '7.x-2.0',
            'project' => 'commerce_shipping',
            'datestamp' => '1353011121',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_shipping',
          'version' => '7.x-2.0',
        ),
        'actions_permissions' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/views_bulk_operations/actions_permissions.module',
          'basename' => 'actions_permissions.module',
          'name' => 'actions_permissions',
          'info' => 
          array (
            'name' => 'Actions permissions (VBO)',
            'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
            'package' => 'Administration',
            'core' => '7.x',
            'version' => '7.x-3.1',
            'project' => 'views_bulk_operations',
            'datestamp' => '1354500015',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views_bulk_operations',
          'version' => '7.x-3.1',
        ),
        'views_bulk_operations' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/views_bulk_operations/views_bulk_operations.module',
          'basename' => 'views_bulk_operations.module',
          'name' => 'views_bulk_operations',
          'info' => 
          array (
            'name' => 'Views Bulk Operations',
            'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'views',
            ),
            'package' => 'Views',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/operation_types/base.class.php',
              1 => 'views/views_bulk_operations_handler_field_operations.inc',
            ),
            'version' => '7.x-3.1',
            'project' => 'views_bulk_operations',
            'datestamp' => '1354500015',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views_bulk_operations',
          'version' => '7.x-3.1',
        ),
        'views_megarow' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/views_megarow/views_megarow.module',
          'basename' => 'views_megarow.module',
          'name' => 'views_megarow',
          'info' => 
          array (
            'name' => 'Views megarow',
            'description' => 'Open views links in a modal.',
            'core' => '7.x',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'files' => 
            array (
              0 => 'includes/views/plugins/views_plugin_style_table_megarows.inc',
              1 => 'includes/views/handlers/views_handler_field_megarow_links.inc',
            ),
            'version' => '7.x-1.1',
            'project' => 'views_megarow',
            'datestamp' => '1374855382',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'views_megarow',
          'version' => '7.x-1.1',
        ),
        'commerce_robokassa' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_robokassa/commerce_robokassa.module',
          'basename' => 'commerce_robokassa.module',
          'name' => 'commerce_robokassa',
          'info' => 
          array (
            'name' => 'Commerce Robokassa',
            'description' => 'Implements Robokassa.ru payment services for use with Drupal Commerce.',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_payment',
              2 => 'commerce_order',
            ),
            'core' => '7.x',
            'version' => '7.x-1.0-rc1',
            'project' => 'commerce_robokassa',
            'datestamp' => '1323184838',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_robokassa',
          'version' => '7.x-1.0-rc1',
        ),
        'asset_gallery' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/asset_gallery/asset_gallery.module',
          'basename' => 'asset_gallery.module',
          'name' => 'asset_gallery',
          'info' => 
          array (
            'name' => 'Image gallery asset',
            'description' => 'Provides a sample image gallery asset',
            'package' => 'Media assets',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'asset_image',
              1 => 'asset',
              2 => 'entityreference',
              3 => 'references_dialog',
              4 => 'lightbox2',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'asset_document' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/asset_document/asset_document.module',
          'basename' => 'asset_document.module',
          'name' => 'asset_document',
          'info' => 
          array (
            'name' => 'Asset Document',
            'description' => 'Provides a sample document asset',
            'package' => 'Media assets',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'asset',
              1 => 'field_sql_storage',
              2 => 'file',
              3 => 'text',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'emvideo_dailymotion' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/emvideo/modules/emvideo_dailymotion/emvideo_dailymotion.module',
          'basename' => 'emvideo_dailymotion.module',
          'name' => 'emvideo_dailymotion',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'emvideo',
            ),
            'description' => 'Provides an Embedded Video support for Dailymotion',
            'name' => 'Embedded Video Dailymotion',
            'package' => 'Embedded video',
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'emvideo_wattv' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/emvideo/modules/emvideo_wattv/emvideo_wattv.module',
          'basename' => 'emvideo_wattv.module',
          'name' => 'emvideo_wattv',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'emvideo',
            ),
            'description' => 'Provides an Embedded Video support for Wat TV',
            'name' => 'Embedded Video Wat TV',
            'package' => 'Embedded video',
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'emvideo_ina' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/emvideo/modules/emvideo_ina/emvideo_ina.module',
          'basename' => 'emvideo_ina.module',
          'name' => 'emvideo_ina',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'emvideo',
            ),
            'description' => 'Provides an Embedded Video support for INA',
            'name' => 'Embedded Video INA',
            'package' => 'Embedded video',
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'emvideo_youtube' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/emvideo/modules/emvideo_youtube/emvideo_youtube.module',
          'basename' => 'emvideo_youtube.module',
          'name' => 'emvideo_youtube',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'emvideo',
            ),
            'description' => 'Provides an Embedded Video support for Youtube',
            'name' => 'Embedded Video Youtube',
            'package' => 'Embedded video',
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'emvideo_vimeo' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/emvideo/modules/emvideo_vimeo/emvideo_vimeo.module',
          'basename' => 'emvideo_vimeo.module',
          'name' => 'emvideo_vimeo',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'emvideo',
            ),
            'description' => 'Provides an Embedded Video support for Vimeo',
            'name' => 'Embedded Video Vimeo',
            'package' => 'Embedded video',
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'emvideo' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/emvideo/emvideo.module',
          'basename' => 'emvideo.module',
          'name' => 'emvideo',
          'info' => 
          array (
            'name' => 'Embedded Video core module',
            'description' => 'Provides an Embedded Video field',
            'package' => 'Embedded video',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'text',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'asset_image' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/asset_image/asset_image.module',
          'basename' => 'asset_image.module',
          'name' => 'asset_image',
          'info' => 
          array (
            'name' => 'Asset Image',
            'description' => 'Provides sample image asset',
            'package' => 'Media assets',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'asset',
              1 => 'field_sql_storage',
              2 => 'image',
              3 => 'text',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'asset_audio' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/asset_audio/asset_audio.module',
          'basename' => 'asset_audio.module',
          'name' => 'asset_audio',
          'info' => 
          array (
            'name' => 'Asset Audio',
            'description' => 'Provides a sample audio asset',
            'package' => 'Media assets',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'asset',
              1 => 'file',
              2 => 'jplayer',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'asset_widget' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/asset_widget/asset_widget.module',
          'basename' => 'asset_widget.module',
          'name' => 'asset_widget',
          'info' => 
          array (
            'name' => 'Asset widget',
            'description' => 'Provides an advanced search UI and contribution widget',
            'package' => 'Media assets',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'asset',
              1 => 'views',
              2 => 'image',
            ),
            'files' => 
            array (
              0 => 'views/plugins/views_plugin_exposed_form_asset_widget.inc',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'asset_feeds' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/asset_feeds/asset_feeds.module',
          'basename' => 'asset_feeds.module',
          'name' => 'asset_feeds',
          'info' => 
          array (
            'name' => 'Assets Feeds Import',
            'description' => 'Asset integration with feeds.',
            'package' => 'Feeds',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'feeds',
              1 => 'asset',
            ),
            'files' => 
            array (
              0 => 'AssetFeedsProcessor.inc',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'asset_freehtml' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/asset_freehtml/asset_freehtml.module',
          'basename' => 'asset_freehtml.module',
          'name' => 'asset_freehtml',
          'info' => 
          array (
            'name' => 'Asset free HTML',
            'description' => 'Provides a sample free HTML asset',
            'package' => 'Media assets',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'asset',
              1 => 'text',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'asset_video' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/modules/asset_video/asset_video.module',
          'basename' => 'asset_video.module',
          'name' => 'asset_video',
          'info' => 
          array (
            'name' => 'Asset Video',
            'description' => 'Provides a sample video asset',
            'package' => 'Media assets',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'asset',
              1 => 'field_sql_storage',
              2 => 'text',
              3 => 'emvideo',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'asset' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/asset/asset.module',
          'basename' => 'asset.module',
          'name' => 'asset',
          'info' => 
          array (
            'name' => 'Asset',
            'description' => 'Provides entity based media assets',
            'package' => 'Media assets',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'field_ui',
              2 => 'field_sql_storage',
              3 => 'menu',
            ),
            'files' => 
            array (
              0 => 'asset.install',
              1 => 'includes/asset.controllers.inc',
              2 => 'includes/asset.migrate.inc',
              3 => 'views/asset.views.inc',
              4 => 'views/asset.views_default.inc',
              5 => 'views/handlers/asset_views_handler_field_asset.inc',
              6 => 'views/handlers/asset_views_handler_field_asset_link.inc',
              7 => 'views/handlers/asset_views_handler_field_asset_link_edit.inc',
              8 => 'views/handlers/asset_views_handler_field_asset_link_delete.inc',
              9 => 'views/handlers/asset_views_handler_field_asset_link_insert.inc',
              10 => 'views/handlers/asset_views_handler_argument_asset_aid.inc',
              11 => 'views/handlers/asset_views_plugin_row_asset_view.inc',
              12 => 'theme/theme.inc',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'asset',
            'datestamp' => '1361391239',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'project' => 'asset',
          'version' => '7.x-1.0-beta4',
        ),
        'commerce_discount_date' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_discount/modules/commerce_discount_date/commerce_discount_date.module',
          'basename' => 'commerce_discount_date.module',
          'name' => 'commerce_discount_date',
          'info' => 
          array (
            'name' => 'Commerce Discount Date',
            'description' => 'Provides date fields for the Commerce discount entity.',
            'core' => '7.x',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce_discount',
              1 => 'date',
              2 => 'date_popup',
            ),
            'files' => 
            array (
              0 => 'commerce_discount_date.test',
            ),
            'version' => '7.x-1.0-alpha3',
            'project' => 'commerce_discount',
            'datestamp' => '1374743169',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_discount',
          'version' => '7.x-1.0-alpha3',
        ),
        'commerce_discount_usage' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_discount/modules/commerce_discount_usage/commerce_discount_usage.module',
          'basename' => 'commerce_discount_usage.module',
          'name' => 'commerce_discount_usage',
          'info' => 
          array (
            'name' => 'Commerce Discount Usage',
            'description' => 'Provides fields for tracking the discount usage.',
            'core' => '7.x',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce_discount',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_discount_usage_handler_field_commerce_discount_usage.inc',
              1 => 'commerce_discount_usage.test',
            ),
            'version' => '7.x-1.0-alpha3',
            'project' => 'commerce_discount',
            'datestamp' => '1374743169',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_discount',
          'version' => '7.x-1.0-alpha3',
        ),
        'commerce_discount' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_discount/commerce_discount.module',
          'basename' => 'commerce_discount.module',
          'name' => 'commerce_discount',
          'info' => 
          array (
            'name' => 'Commerce Discount',
            'description' => 'Provides common functionality and a UI for managing discounts.',
            'core' => '7.x',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'number',
              1 => 'commerce_price',
              2 => 'commerce_line_item',
              3 => 'entity',
              4 => 'entityreference',
              5 => 'inline_entity_form',
              6 => 'views',
              7 => 'inline_conditions',
            ),
            'files' => 
            array (
              0 => 'commerce_discount.info.inc',
              1 => 'includes/commerce_discount.admin.inc',
              2 => 'includes/commerce_discount.class.inc',
              3 => 'includes/commerce_discount_offer.class.inc',
              4 => 'includes/commerce_discount_offer.inline_entity_form.inc',
              5 => 'includes/commerce_discount.controller.inc',
              6 => 'includes/views/commerce_discount.views.inc',
              7 => 'includes/views/handlers/commerce_discount_handler_field_operations_dropbutton.inc',
              8 => 'commerce_discount.test',
            ),
            'version' => '7.x-1.0-alpha3',
            'project' => 'commerce_discount',
            'datestamp' => '1374743169',
            'php' => '5.2.4',
          ),
          'schema_version' => '7103',
          'project' => 'commerce_discount',
          'version' => '7.x-1.0-alpha3',
        ),
        'commerce_product_pricing' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing.module',
          'basename' => 'commerce_product_pricing.module',
          'name' => 'commerce_product_pricing',
          'info' => 
          array (
            'name' => 'Product Pricing',
            'description' => 'Enables Rules based product sell price calculation for dynamic product pricing.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_price',
              2 => 'commerce_product_reference',
              3 => 'entity',
              4 => 'rules',
              5 => 'rules_admin',
            ),
            'core' => '7.x',
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_product_pricing_ui' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing_ui.module',
          'basename' => 'commerce_product_pricing_ui.module',
          'name' => 'commerce_product_pricing_ui',
          'info' => 
          array (
            'name' => 'Product Pricing UI',
            'description' => 'Exposes a UI for managing product pricing rules and pre-calculation settings.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'rules_admin',
              1 => 'commerce',
              2 => 'commerce_ui',
              3 => 'commerce_price',
              4 => 'commerce_product_pricing',
              5 => 'commerce_product_reference',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/product-pricing',
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_payment_dummy_offsite' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/payment/tests/commerce_payment_dummy_offsite.module',
          'basename' => 'commerce_payment_dummy_offsite.module',
          'name' => 'commerce_payment_dummy_offsite',
          'info' => 
          array (
            'name' => 'Commerce payment offsite test',
            'description' => 'Support module for customer payment related testing.',
            'package' => 'Testing',
            'version' => '7.x-1.8',
            'core' => '7.x',
            'hidden' => true,
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_payment_example' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/payment/modules/commerce_payment_example.module',
          'basename' => 'commerce_payment_example.module',
          'name' => 'commerce_payment_example',
          'info' => 
          array (
            'name' => 'Payment Method Example',
            'description' => 'Provides an example payment method for testing and development.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_payment',
            ),
            'core' => '7.x',
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_payment' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/payment/commerce_payment.module',
          'basename' => 'commerce_payment.module',
          'name' => 'commerce_payment',
          'info' => 
          array (
            'name' => 'Payment',
            'description' => 'Implement core payment features for Drupal commerce.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_order',
              2 => 'entity',
              3 => 'rules',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'commerce_payment.rules.inc',
              1 => 'includes/commerce_payment_transaction.controller.inc',
              2 => 'includes/views/handlers/commerce_payment_handler_area_totals.inc',
              3 => 'includes/views/handlers/commerce_payment_handler_field_amount.inc',
              4 => 'includes/views/handlers/commerce_payment_handler_field_currency_code.inc',
              5 => 'includes/views/handlers/commerce_payment_handler_field_message.inc',
              6 => 'includes/views/handlers/commerce_payment_handler_field_payment_method.inc',
              7 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link.inc',
              8 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link_delete.inc',
              9 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_operations.inc',
              10 => 'includes/views/handlers/commerce_payment_handler_field_status.inc',
              11 => 'includes/views/handlers/commerce_payment_handler_filter_payment_method.inc',
              12 => 'includes/views/handlers/commerce_payment_handler_filter_payment_transaction_status.inc',
              13 => 'includes/views/handlers/commerce_payment_handler_filter_currency_code.inc',
              14 => 'includes/views/handlers/commerce_payment_handler_field_balance.inc',
              15 => 'tests/commerce_payment.rules.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_payment_ui' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/payment/commerce_payment_ui.module',
          'basename' => 'commerce_payment_ui.module',
          'name' => 'commerce_payment_ui',
          'info' => 
          array (
            'name' => 'Payment UI',
            'description' => 'Exposes a default UI for payment method configuration and payment transaction administration.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'rules_admin',
              1 => 'commerce',
              2 => 'commerce_order',
              3 => 'commerce_order_ui',
              4 => 'commerce_payment',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/payment-methods',
            'files' => 
            array (
              0 => 'tests/commerce_payment_ui.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_product_reference' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/product_reference/commerce_product_reference.module',
          'basename' => 'commerce_product_reference.module',
          'name' => 'commerce_product_reference',
          'info' => 
          array (
            'name' => 'Product Reference',
            'description' => 'Defines a product reference field and default display formatters.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_line_item',
              2 => 'commerce_price',
              3 => 'commerce_product',
              4 => 'entity',
              5 => 'options',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_is_product_display.inc',
              1 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_type.inc',
              2 => 'includes/views/handlers/commerce_product_reference_handler_filter_product_line_item_type.inc',
              3 => 'tests/commerce_product_reference.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_product_crud_test' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/product/tests/commerce_product_crud_test.module',
          'basename' => 'commerce_product_crud_test.module',
          'name' => 'commerce_product_crud_test',
          'info' => 
          array (
            'name' => 'Commerce product crud test',
            'description' => 'Support module for product related testing.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'version' => '7.x-1.8',
            'core' => '7.x',
            'hidden' => true,
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_product' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/product/commerce_product.module',
          'basename' => 'commerce_product.module',
          'name' => 'commerce_product',
          'info' => 
          array (
            'name' => 'Product',
            'description' => 'Defines the Product entity and associated features.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_price',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/commerce_product.controller.inc',
              1 => 'includes/views/handlers/commerce_product_handler_area_empty_text.inc',
              2 => 'includes/views/handlers/commerce_product_handler_argument_product_id.inc',
              3 => 'includes/views/handlers/commerce_product_handler_field_product.inc',
              4 => 'includes/views/handlers/commerce_product_handler_field_product_type.inc',
              5 => 'includes/views/handlers/commerce_product_handler_field_product_link.inc',
              6 => 'includes/views/handlers/commerce_product_handler_field_product_link_delete.inc',
              7 => 'includes/views/handlers/commerce_product_handler_field_product_link_edit.inc',
              8 => 'includes/views/handlers/commerce_product_handler_field_product_operations.inc',
              9 => 'includes/views/handlers/commerce_product_handler_filter_product_type.inc',
              10 => 'includes/commerce_product.translation_handler.inc',
              11 => 'tests/commerce_product.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7104',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_product_ui' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/product/commerce_product_ui.module',
          'basename' => 'commerce_product_ui.module',
          'name' => 'commerce_product_ui',
          'info' => 
          array (
            'name' => 'Product UI',
            'description' => 'Exposes a default UI for Products through product edit forms and default Views.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'contextual',
              1 => 'field_ui',
              2 => 'commerce',
              3 => 'commerce_ui',
              4 => 'commerce_product',
              5 => 'views',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/products/types',
            'files' => 
            array (
              0 => 'tests/commerce_product_ui.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_price' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/price/commerce_price.module',
          'basename' => 'commerce_price.module',
          'name' => 'commerce_price',
          'info' => 
          array (
            'name' => 'Price',
            'description' => 'Defines the price field and a price alteration system.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'commerce_price.rules.inc',
              1 => 'includes/views/commerce_price.views.inc',
              2 => 'includes/views/handlers/commerce_price_handler_field_commerce_price.inc',
              3 => 'includes/views/handlers/commerce_price_handler_filter_commerce_price_amount.inc',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_cart' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/cart/commerce_cart.module',
          'basename' => 'commerce_cart.module',
          'name' => 'commerce_cart',
          'info' => 
          array (
            'name' => 'Cart',
            'description' => 'Implements the shopping cart system and add to cart features.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_checkout',
              2 => 'commerce_line_item',
              3 => 'commerce_order',
              4 => 'commerce_product',
              5 => 'commerce_product_pricing',
              6 => 'commerce_product_reference',
              7 => 'entity',
              8 => 'rules',
              9 => 'views',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_cart_handler_field_add_to_cart_form.inc',
              1 => 'includes/views/handlers/commerce_cart_plugin_argument_default_current_cart_order_id.inc',
              2 => 'includes/views/handlers/commerce_cart_handler_area_empty_text.inc',
              3 => 'tests/commerce_cart.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_order' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/order/commerce_order.module',
          'basename' => 'commerce_order.module',
          'name' => 'commerce_order',
          'info' => 
          array (
            'name' => 'Order',
            'description' => 'Defines the Order entity and associated features.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_customer',
              2 => 'commerce_line_item',
              3 => 'commerce_price',
              4 => 'entity',
              5 => 'rules',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/commerce_order.controller.inc',
              1 => 'includes/views/commerce_order.views.inc',
              2 => 'includes/views/handlers/commerce_order_handler_area_empty_text.inc',
              3 => 'includes/views/handlers/commerce_order_handler_area_order_total.inc',
              4 => 'includes/views/handlers/commerce_order_handler_argument_order_order_id.inc',
              5 => 'includes/views/handlers/commerce_order_handler_field_order.inc',
              6 => 'includes/views/handlers/commerce_order_handler_field_order_status.inc',
              7 => 'includes/views/handlers/commerce_order_handler_field_order_state.inc',
              8 => 'includes/views/handlers/commerce_order_handler_field_order_type.inc',
              9 => 'includes/views/handlers/commerce_order_handler_field_order_link.inc',
              10 => 'includes/views/handlers/commerce_order_handler_field_order_link_delete.inc',
              11 => 'includes/views/handlers/commerce_order_handler_field_order_link_edit.inc',
              12 => 'includes/views/handlers/commerce_order_handler_field_order_mail.inc',
              13 => 'includes/views/handlers/commerce_order_handler_field_order_operations.inc',
              14 => 'includes/views/handlers/commerce_order_handler_filter_order_status.inc',
              15 => 'includes/views/handlers/commerce_order_handler_filter_order_state.inc',
              16 => 'includes/views/handlers/commerce_order_handler_filter_order_type.inc',
              17 => 'includes/views/handlers/commerce_order_plugin_argument_validate_user.inc',
              18 => 'tests/commerce_order.rules.test',
              19 => 'tests/commerce_order.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7109',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_order_ui' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/order/commerce_order_ui.module',
          'basename' => 'commerce_order_ui.module',
          'name' => 'commerce_order_ui',
          'info' => 
          array (
            'name' => 'Order UI',
            'description' => 'Exposes a default UI for Orders through order edit forms and default Views.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'contextual',
              1 => 'field_ui',
              2 => 'commerce',
              3 => 'commerce_ui',
              4 => 'commerce_line_item',
              5 => 'commerce_order',
              6 => 'views',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/order',
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_order_ui_handler_area_view_order_form.inc',
              1 => 'tests/commerce_order_ui.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_customer_profile_dummy_type' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/customer/tests/commerce_customer_profile_dummy_type.module',
          'basename' => 'commerce_customer_profile_dummy_type.module',
          'name' => 'commerce_customer_profile_dummy_type',
          'info' => 
          array (
            'name' => 'Commerce Customer Dummy Profile',
            'description' => 'Defines a dummy customer profile type for use in certain Customer module tests.',
            'package' => 'Testing',
            'version' => '7.x-1.8',
            'core' => '7.x',
            'hidden' => true,
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_customer' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/customer/commerce_customer.module',
          'basename' => 'commerce_customer.module',
          'name' => 'commerce_customer',
          'info' => 
          array (
            'name' => 'Customer',
            'description' => 'Defines the Customer entity with Address Field integration.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'addressfield',
              1 => 'commerce',
              2 => 'entity',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/commerce_customer_profile.controller.inc',
              1 => 'includes/views/handlers/commerce_customer_handler_area_empty_text.inc',
              2 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile.inc',
              3 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link.inc',
              4 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_delete.inc',
              5 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_edit.inc',
              6 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_type.inc',
              7 => 'includes/views/handlers/commerce_customer_handler_filter_customer_profile_type.inc',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_customer_ui' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/customer/commerce_customer_ui.module',
          'basename' => 'commerce_customer_ui.module',
          'name' => 'commerce_customer_ui',
          'info' => 
          array (
            'name' => 'Customer UI',
            'description' => 'Exposes a default UI for Customers through profile edit forms and default Views.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'contextual',
              1 => 'field_ui',
              2 => 'commerce',
              3 => 'commerce_ui',
              4 => 'commerce_customer',
              5 => 'views',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/customer-profiles/types',
            'files' => 
            array (
              0 => 'includes/commerce_customer_ui.profiles.inc',
              1 => 'includes/commerce_customer_ui.profile_types.inc',
              2 => 'includes/views/commerce_customer_ui.views_default.inc',
              3 => 'tests/commerce_customer_ui.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_line_item' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/line_item/commerce_line_item.module',
          'basename' => 'commerce_line_item.module',
          'name' => 'commerce_line_item',
          'info' => 
          array (
            'name' => 'Line Item',
            'description' => 'Defines the Line Item entity and associated features.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_price',
              2 => 'entity',
              3 => 'rules',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/commerce_line_item.controller.inc',
              1 => 'includes/views/handlers/commerce_line_item_handler_area_line_item_summary.inc',
              2 => 'includes/views/handlers/commerce_line_item_handler_argument_line_item_line_item_id.inc',
              3 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_title.inc',
              4 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_type.inc',
              5 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_type.inc',
              6 => 'includes/views/handlers/commerce_line_item_handler_field_edit_quantity.inc',
              7 => 'includes/views/handlers/commerce_line_item_handler_field_edit_delete.inc',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_line_item_ui' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/line_item/commerce_line_item_ui.module',
          'basename' => 'commerce_line_item_ui.module',
          'name' => 'commerce_line_item_ui',
          'info' => 
          array (
            'name' => 'Line Item UI',
            'description' => 'Exposes a default UI for Line Items through line item type forms and default Views.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'contextual',
              1 => 'field_ui',
              2 => 'commerce',
              3 => 'commerce_ui',
              4 => 'commerce_line_item',
              5 => 'views',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/line-items',
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_checkout' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/checkout/commerce_checkout.module',
          'basename' => 'commerce_checkout.module',
          'name' => 'commerce_checkout',
          'info' => 
          array (
            'name' => 'Checkout',
            'description' => 'Enable checkout as a multi-step form with customizable checkout pages.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_order',
              3 => 'commerce_product_reference',
              4 => 'entity',
              5 => 'rules',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/checkout',
            'files' => 
            array (
              0 => 'tests/commerce_checkout.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_tax_ui' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/tax/commerce_tax_ui.module',
          'basename' => 'commerce_tax_ui.module',
          'name' => 'commerce_tax_ui',
          'info' => 
          array (
            'name' => 'Tax UI',
            'description' => 'Provides a UI for creating simple tax types and rates.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_ui',
              2 => 'commerce_tax',
            ),
            'core' => '7.x',
            'configure' => 'admin/commerce/config/taxes',
            'files' => 
            array (
              0 => 'tests/commerce_tax_ui.test',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_tax' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/modules/tax/commerce_tax.module',
          'basename' => 'commerce_tax.module',
          'name' => 'commerce_tax',
          'info' => 
          array (
            'name' => 'Tax',
            'description' => 'Define tax rates and configure tax rules for applicability and display.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
              1 => 'commerce_line_item',
              2 => 'commerce_price',
              3 => 'commerce_product_pricing',
              4 => 'entity',
              5 => 'rules',
            ),
            'core' => '7.x',
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/commerce.module',
          'basename' => 'commerce.module',
          'name' => 'commerce',
          'info' => 
          array (
            'name' => 'Commerce',
            'description' => 'Defines features and functions common to the Commerce modules. Must be enabled to uninstall other Commerce modules.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'system',
              1 => 'entity',
              2 => 'rules',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tests/commerce_base.test',
              1 => 'includes/commerce.controller.inc',
            ),
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'commerce_ui' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce/commerce_ui.module',
          'basename' => 'commerce_ui.module',
          'name' => 'commerce_ui',
          'info' => 
          array (
            'name' => 'Commerce UI',
            'description' => 'Defines menu items common to the various Drupal Commerce UI modules.',
            'package' => 'Commerce',
            'dependencies' => 
            array (
              0 => 'commerce',
            ),
            'core' => '7.x',
            'version' => '7.x-1.8',
            'project' => 'commerce',
            'datestamp' => '1374609067',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce',
          'version' => '7.x-1.8',
        ),
        'lightbox2' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/lightbox2/lightbox2.module',
          'basename' => 'lightbox2.module',
          'name' => 'lightbox2',
          'info' => 
          array (
            'name' => 'Lightbox2',
            'description' => 'Enables Lightbox2 for Drupal',
            'core' => '7.x',
            'package' => 'User interface',
            'files' => 
            array (
              0 => 'lightbox2.install',
              1 => 'lightbox2.module',
              2 => 'lightbox2.formatter.inc',
              3 => 'lightbox2.admin.inc',
            ),
            'configure' => 'admin/config/user-interface/lightbox2',
            'version' => '7.x-1.0-beta1',
            'project' => 'lightbox2',
            'datestamp' => '1318819001',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '6003',
          'project' => 'lightbox2',
          'version' => '7.x-1.0-beta1',
        ),
        'menu_position' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/menu_position/menu_position.module',
          'basename' => 'menu_position.module',
          'name' => 'menu_position',
          'info' => 
          array (
            'name' => 'Menu position',
            'description' => 'Customize menu position of nodes depending on their content type, associated terms and others conditions.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'menu (>7.11)',
            ),
            'files' => 
            array (
              0 => 'menu_position.module',
              1 => 'menu_position.admin.inc',
              2 => 'menu_position.install',
              3 => 'menu_position.node_type.inc',
            ),
            'configure' => 'admin/structure/menu-position',
            'version' => '7.x-1.1',
            'project' => 'menu_position',
            'datestamp' => '1329911144',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'project' => 'menu_position',
          'version' => '7.x-1.1',
        ),
        'content_taxonomy_migrate' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/content_taxonomy/content_taxonomy_migrate.module',
          'basename' => 'content_taxonomy_migrate.module',
          'name' => 'content_taxonomy_migrate',
          'info' => 
          array (
            'name' => 'Content Taxonomy Migrate',
            'description' => 'Migration from Content Taxonomy to Term Reference Fields',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'taxonomy',
              1 => 'content_migrate',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'content_taxonomy',
            'datestamp' => '1360767812',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'content_taxonomy',
          'version' => '7.x-1.0-beta2',
        ),
        'content_taxonomy' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/content_taxonomy/content_taxonomy.module',
          'basename' => 'content_taxonomy.module',
          'name' => 'content_taxonomy',
          'info' => 
          array (
            'name' => 'Content Taxonomy',
            'description' => 'Extends the Taxonomy Reference Fields',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'taxonomy',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'content_taxonomy',
            'datestamp' => '1360767812',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'content_taxonomy',
          'version' => '7.x-1.0-beta2',
        ),
        'content_taxonomy_autocomplete' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/content_taxonomy/content_taxonomy_autocomplete.module',
          'basename' => 'content_taxonomy_autocomplete.module',
          'name' => 'content_taxonomy_autocomplete',
          'info' => 
          array (
            'name' => 'Content Taxonomy Autocomplete',
            'description' => 'Extends the Taxonomy Autocomplete Widget',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'content_taxonomy',
            ),
            'files' => 
            array (
              0 => 'includes/content_taxonomy_autocomplete_moderated_terms.inc',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'content_taxonomy',
            'datestamp' => '1360767812',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'content_taxonomy',
          'version' => '7.x-1.0-beta2',
        ),
        'commerce_backoffice_product' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_backoffice/commerce_backoffice_product.module',
          'basename' => 'commerce_backoffice_product.module',
          'name' => 'commerce_backoffice_product',
          'info' => 
          array (
            'name' => 'Commerce Backoffice Product',
            'description' => 'Provides advanced product management.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_backoffice',
              1 => 'commerce_product',
              2 => 'commerce_product_ui',
              3 => 'views_bulk_operations',
              4 => 'views_megarow',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_backoffice_product_handler_field_product_quick_edit_form.inc',
            ),
            'version' => '7.x-1.3',
            'project' => 'commerce_backoffice',
            'datestamp' => '1374682868',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_backoffice',
          'version' => '7.x-1.3',
        ),
        'commerce_backoffice_order' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_backoffice/commerce_backoffice_order.module',
          'basename' => 'commerce_backoffice_order.module',
          'name' => 'commerce_backoffice_order',
          'info' => 
          array (
            'name' => 'Commerce Backoffice Order',
            'description' => 'Provides advanced order management.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_backoffice',
              1 => 'commerce_order',
              2 => 'commerce_order_ui',
              3 => 'commerce_cart',
              4 => 'commerce_payment',
              5 => 'date',
              6 => 'date_popup',
              7 => 'date_views',
              8 => 'eva',
              9 => 'entity_token',
              10 => 'views_bulk_operations',
              11 => 'views_megarow',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_backoffice_order_handler_field_order_operations.inc',
            ),
            'version' => '7.x-1.3',
            'project' => 'commerce_backoffice',
            'datestamp' => '1374682868',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_backoffice',
          'version' => '7.x-1.3',
        ),
        'commerce_backoffice_content' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_backoffice/commerce_backoffice_content.module',
          'basename' => 'commerce_backoffice_content.module',
          'name' => 'commerce_backoffice_content',
          'info' => 
          array (
            'name' => 'Commerce Backoffice content',
            'description' => 'Backoffice content views for Commerce.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'dependencies' => 
            array (
              0 => 'commerce_backoffice',
              1 => 'commerce_product_reference',
              2 => 'views_bulk_operations',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_backoffice_content_filter_node_type.inc',
              1 => 'includes/views/plugins/commerce_backoffice_content_plugin_display_system.inc',
            ),
            'version' => '7.x-1.3',
            'project' => 'commerce_backoffice',
            'datestamp' => '1374682868',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_backoffice',
          'version' => '7.x-1.3',
        ),
        'commerce_backoffice' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/contrib/commerce_backoffice/commerce_backoffice.module',
          'basename' => 'commerce_backoffice.module',
          'name' => 'commerce_backoffice',
          'info' => 
          array (
            'name' => 'Commerce Backoffice',
            'description' => 'Provides the basic backoffice functionality needed by the submodules.',
            'core' => '7.x',
            'package' => 'Commerce (contrib)',
            'files' => 
            array (
              0 => 'includes/views/handlers/commerce_backoffice_handler_filter_term_node_tid.inc',
              1 => 'includes/views/handlers/commerce_backoffice_handler_field_term_entity_tid.inc',
              2 => 'includes/views/handlers/commerce_backoffice_handler_field_node_operations.inc',
            ),
            'version' => '7.x-1.3',
            'project' => 'commerce_backoffice',
            'datestamp' => '1374682868',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'commerce_backoffice',
          'version' => '7.x-1.3',
        ),
        'common_nodequeues' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_nodequeues/common_nodequeues.module',
          'basename' => 'common_nodequeues.module',
          'name' => 'common_nodequeues',
          'info' => 
          array (
            'name' => 'Common nodequeues',
            'description' => 'Provides common nodequeues',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_nodequeues',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'fe_nodequeue',
              2 => 'nodequeue',
              3 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'fe_nodequeue' => 
              array (
                0 => 'articles',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_nodequeues',
          'version' => '7.x-1.0',
        ),
        'common_dashboard_article' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_dashboard_article/common_dashboard_article.module',
          'basename' => 'common_dashboard_article.module',
          'name' => 'common_dashboard_article',
          'info' => 
          array (
            'name' => 'Common Dashboard Article',
            'description' => 'Provides dashboard page and views for articles management.',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_dashboard_article',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'page_manager',
              2 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'page_manager_pages' => 
              array (
                0 => 'dashboard_article',
              ),
              'views_view' => 
              array (
                0 => 'dashboard_articles',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_dashboard_article',
          'version' => '7.x-1.0',
        ),
        'common_dashboard_page' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_dashboard_page/common_dashboard_page.module',
          'basename' => 'common_dashboard_page.module',
          'name' => 'common_dashboard_page',
          'info' => 
          array (
            'name' => 'Common Dashboard Pages',
            'description' => 'Provides dashboard page and views for pages management.',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_dashboard_page',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'page_manager',
              2 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'page_manager_pages' => 
              array (
                0 => 'dashboard_page',
              ),
              'views_view' => 
              array (
                0 => 'dashboard_static_pages',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_dashboard_page',
          'version' => '7.x-1.0',
        ),
        'common_dashboard_tags' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_dashboard_tags/common_dashboard_tags.module',
          'basename' => 'common_dashboard_tags.module',
          'name' => 'common_dashboard_tags',
          'info' => 
          array (
            'name' => 'Common Dashboard Tags',
            'description' => 'Provides dashboard panel and views for tags management',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_dashboard_tags',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'page_manager',
              2 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'page_manager_pages' => 
              array (
                0 => 'dashboard_tags',
              ),
              'views_view' => 
              array (
                0 => 'dashboard_tags',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_dashboard_tags',
          'version' => '7.x-1.0',
        ),
        'common_content_type_page' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_content_type_page/common_content_type_page.module',
          'basename' => 'common_content_type_page.module',
          'name' => 'common_content_type_page',
          'info' => 
          array (
            'name' => 'Common Content Type Page',
            'description' => 'Common Content Type Page',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_content_type_page',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entityreference',
              2 => 'features',
              3 => 'field_group',
              4 => 'link',
              5 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'field' => 
              array (
                0 => 'node-page-field_blocks_zone1',
                1 => 'node-page-field_blocks_zone2',
                2 => 'node-page-field_page_body',
                3 => 'node-page-field_page_catchline',
                4 => 'node-page-field_page_main_media',
              ),
              'field_group' => 
              array (
                0 => 'group_blocks|node|page|form',
              ),
              'node' => 
              array (
                0 => 'page',
              ),
              'variable' => 
              array (
                0 => 'additional_settings__active_tab_page',
                1 => 'comment_page',
                2 => 'diff_enable_revisions_page_node_page',
                3 => 'diff_show_preview_changes_node_page',
                4 => 'diff_view_mode_preview_node_page',
                5 => 'field_bundle_settings_node__page',
                6 => 'language_content_type_page',
                7 => 'maxlength_js_label_page',
                8 => 'maxlength_js_page',
                9 => 'menu_options_page',
                10 => 'menu_parent_page',
                11 => 'node_options_page',
                12 => 'node_preview_page',
                13 => 'node_submitted_page',
                14 => 'scheduler_publish_enable_page',
                15 => 'scheduler_publish_required_page',
                16 => 'scheduler_publish_revision_page',
                17 => 'scheduler_publish_touch_page',
                18 => 'scheduler_unpublish_enable_page',
                19 => 'scheduler_unpublish_required_page',
                20 => 'scheduler_unpublish_revision_page',
                21 => 'xmlsitemap_settings_node_page',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_content_type_page',
          'version' => '7.x-1.0',
        ),
        'common_dashboard_users' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_dashboard_users/common_dashboard_users.module',
          'basename' => 'common_dashboard_users.module',
          'name' => 'common_dashboard_users',
          'info' => 
          array (
            'name' => 'Common Dashboard Users',
            'description' => 'Provides dashboard page and views for users management',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_dashboard_users',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'page_manager',
              2 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'page_manager_pages' => 
              array (
                0 => 'dashboard_users',
              ),
              'views_view' => 
              array (
                0 => 'dashboard_users',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_dashboard_users',
          'version' => '7.x-1.0',
        ),
        'common_assets' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_assets/common_assets.module',
          'basename' => 'common_assets.module',
          'name' => 'common_assets',
          'info' => 
          array (
            'name' => 'Common Assets',
            'description' => 'Provides assets settings',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_assets',
            'dependencies' => 
            array (
              0 => 'asset',
              1 => 'emvideo',
              2 => 'entity',
              3 => 'entityreference',
              4 => 'features',
              5 => 'image',
              6 => 'imagefield_crop',
              7 => 'list',
              8 => 'options',
              9 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'field' => 
              array (
                0 => 'asset-gallery-field_asset_description',
                1 => 'asset-gallery-field_asset_gallery_images',
                2 => 'asset-image-field_asset_description',
                3 => 'asset-image-field_asset_image',
                4 => 'asset-image-field_asset_image_copyright',
                5 => 'asset-image-field_crop_ratio',
                6 => 'asset-video-field_asset_video',
                7 => 'asset-video-field_asset_video_desc',
              ),
              'variable' => 
              array (
                0 => 'assets_default_wysiwyg_modes',
                1 => 'assets_wysiwyg_modes',
                2 => 'field_bundle_settings_asset__free_html',
                3 => 'field_bundle_settings_asset__gallery',
                4 => 'field_bundle_settings_asset__image',
                5 => 'field_bundle_settings_asset__poll',
                6 => 'field_bundle_settings_asset__video',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_assets',
          'version' => '7.x-1.0',
        ),
        'common_pathauto_settings' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_pathauto_settings/common_pathauto_settings.module',
          'basename' => 'common_pathauto_settings.module',
          'name' => 'common_pathauto_settings',
          'info' => 
          array (
            'name' => 'Common pathauto settings',
            'description' => 'Common pathauto settings',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_pathauto_settings',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'variable' => 
              array (
                0 => 'pathauto_blog_pattern',
                1 => 'pathauto_case',
                2 => 'pathauto_forum_pattern',
                3 => 'pathauto_ignore_words',
                4 => 'pathauto_max_component_length',
                5 => 'pathauto_max_length',
                6 => 'pathauto_node_article_pattern',
                7 => 'pathauto_node_flash_news_pattern',
                8 => 'pathauto_node_folder_pattern',
                9 => 'pathauto_node_page_pattern',
                10 => 'pathauto_node_pattern',
                11 => 'pathauto_node_poll_pattern',
                12 => 'pathauto_punctuation_ampersand',
                13 => 'pathauto_punctuation_asterisk',
                14 => 'pathauto_punctuation_at',
                15 => 'pathauto_punctuation_back_slash',
                16 => 'pathauto_punctuation_backtick',
                17 => 'pathauto_punctuation_caret',
                18 => 'pathauto_punctuation_colon',
                19 => 'pathauto_punctuation_comma',
                20 => 'pathauto_punctuation_dollar',
                21 => 'pathauto_punctuation_doubcommon_quotes',
                22 => 'pathauto_punctuation_equal',
                23 => 'pathauto_punctuation_exclamation',
                24 => 'pathauto_punctuation_greater_than',
                25 => 'pathauto_punctuation_hash',
                26 => 'pathauto_punctuation_hyphen',
                27 => 'pathauto_punctuation_left_curly',
                28 => 'pathauto_punctuation_left_parenthesis',
                29 => 'pathauto_punctuation_left_square',
                30 => 'pathauto_punctuation_less_than',
                31 => 'pathauto_punctuation_percent',
                32 => 'pathauto_punctuation_period',
                33 => 'pathauto_punctuation_pipe',
                34 => 'pathauto_punctuation_plus',
                35 => 'pathauto_punctuation_question_mark',
                36 => 'pathauto_punctuation_quotes',
                37 => 'pathauto_punctuation_right_curly',
                38 => 'pathauto_punctuation_right_parenthesis',
                39 => 'pathauto_punctuation_right_square',
                40 => 'pathauto_punctuation_semicolon',
                41 => 'pathauto_punctuation_slash',
                42 => 'pathauto_punctuation_tilde',
                43 => 'pathauto_punctuation_underscore',
                44 => 'pathauto_reduce_ascii',
                45 => 'pathauto_separator',
                46 => 'pathauto_taxonomy_term_event_pattern',
                47 => 'pathauto_taxonomy_term_institution_pattern',
                48 => 'pathauto_taxonomy_term_language_pattern',
                49 => 'pathauto_taxonomy_term_pattern',
                50 => 'pathauto_taxonomy_term_personality_pattern',
                51 => 'pathauto_taxonomy_term_place_pattern',
                52 => 'pathauto_taxonomy_term_slugs_pattern',
                53 => 'pathauto_taxonomy_term_thematic_pattern',
                54 => 'pathauto_transliterate',
                55 => 'pathauto_update_action',
                56 => 'pathauto_user_pattern',
                57 => 'pathauto_verbose',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_pathauto_settings',
          'version' => '7.x-1.0',
        ),
        'common_dashboard_medialibrary' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_dashboard_medialibrary/common_dashboard_medialibrary.module',
          'basename' => 'common_dashboard_medialibrary.module',
          'name' => 'common_dashboard_medialibrary',
          'info' => 
          array (
            'name' => 'Common Dashboard Multimedia library',
            'description' => 'Provides dashboard page and views for assets management.',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_dashboard_medialibrary',
            'dependencies' => 
            array (
              0 => 'asset',
              1 => 'ctools',
              2 => 'page_manager',
              3 => 'references_dialog',
              4 => 'views',
              5 => 'views_autocomplete_filters',
              6 => 'views_bulk_operations',
              7 => 'views_content',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'page_manager_pages' => 
              array (
                0 => 'dashboard_media',
              ),
              'views_view' => 
              array (
                0 => 'dashboard_medialibrary',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_dashboard_medialibrary',
          'version' => '7.x-1.0',
        ),
        'common_dashboard_blocks' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_dashboard_blocks/common_dashboard_blocks.module',
          'basename' => 'common_dashboard_blocks.module',
          'name' => 'common_dashboard_blocks',
          'info' => 
          array (
            'name' => 'Common Dashboard Blocks',
            'description' => 'Common Dashboard Blocks',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_dashboard_blocks',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'page_manager',
              2 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'page_manager_pages' => 
              array (
                0 => 'dashboard_blocks',
              ),
              'views_view' => 
              array (
                0 => 'dashboard_blocks',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_dashboard_blocks',
          'version' => '7.x-1.0',
        ),
        'common_settings' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_settings/common_settings.module',
          'basename' => 'common_settings.module',
          'name' => 'common_settings',
          'info' => 
          array (
            'name' => 'Common Settings',
            'description' => 'Provides common settings',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_settings',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'variable' => 
              array (
                0 => 'admin_theme',
                1 => 'theme_common_admin_settings',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_settings',
          'version' => '7.x-1.0',
        ),
        'common_image_styles' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_image_styles/common_image_styles.module',
          'basename' => 'common_image_styles.module',
          'name' => 'common_image_styles',
          'info' => 
          array (
            'name' => 'Common image styles',
            'description' => 'Provides common images styles',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_image_styles',
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'image' => 
              array (
                0 => 'asset_image_in_body',
                1 => 'asset_image_tooltip',
                2 => 'asset_list_preview',
                3 => 'tooltip',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_image_styles',
          'version' => '7.x-1.0',
        ),
        'common_asset_library_view' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_asset_library_view/common_asset_library_view.module',
          'basename' => 'common_asset_library_view.module',
          'name' => 'common_asset_library_view',
          'info' => 
          array (
            'name' => 'Common asset library view',
            'description' => 'Provides Common asset library view',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.23',
            'project' => 'common_asset_library_view',
            'dependencies' => 
            array (
              0 => 'asset',
              1 => 'ckeditor',
              2 => 'common',
              3 => 'emvideo',
              4 => 'emvideo_dailymotion',
              5 => 'emvideo_ina',
              6 => 'emvideo_vimeo',
              7 => 'emvideo_wattv',
              8 => 'emvideo_youtube',
              9 => 'entityreference',
              10 => 'features',
              11 => 'field_group',
              12 => 'filefield_paths',
              13 => 'imagefield_crop',
              14 => 'list',
              15 => 'strongarm',
              16 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'views_view' => 
              array (
                0 => 'common_assets_library',
              ),
            ),
            'files' => 
            array (
              0 => 'common_asset_library_view.features.inc',
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_asset_library_view',
          'version' => '7.x-1.23',
        ),
        'common_admin_menu' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_admin_menu/common_admin_menu.module',
          'basename' => 'common_admin_menu.module',
          'name' => 'common_admin_menu',
          'info' => 
          array (
            'name' => 'Common Admin Menu',
            'description' => 'Provides Admin menu and its links',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.3',
            'project' => 'common_admin_menu',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'menu',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'menu_custom' => 
              array (
                0 => 'management',
                1 => 'menu-common-admin-menu',
              ),
              'menu_links' => 
              array (
                0 => 'menu-common-admin-menu:admin/common_settings',
                1 => 'menu-common-admin-menu:admin/dashboard/articles',
                2 => 'menu-common-admin-menu:admin/dashboard/blocks',
                3 => 'menu-common-admin-menu:admin/dashboard/multimedia',
                4 => 'menu-common-admin-menu:admin/dashboard/pages',
                5 => 'menu-common-admin-menu:admin/dashboard/tags',
                6 => 'menu-common-admin-menu:admin/dashboard/users',
                7 => 'menu-common-admin-menu:admin/structure/nodequeue/1/view/1',
                8 => 'menu-common-admin-menu:admin/structure/nodequeue/2/view/2',
                9 => 'menu-common-admin-menu:menu-position/1',
                10 => 'menu-common-admin-menu:menu-position/10',
                11 => 'menu-common-admin-menu:menu-position/11',
                12 => 'menu-common-admin-menu:menu-position/13',
                13 => 'menu-common-admin-menu:menu-position/2',
                14 => 'menu-common-admin-menu:menu-position/3',
                15 => 'menu-common-admin-menu:menu-position/4',
                16 => 'menu-common-admin-menu:menu-position/5',
                17 => 'menu-common-admin-menu:menu-position/6',
                18 => 'menu-common-admin-menu:menu-position/7',
                19 => 'menu-common-admin-menu:menu-position/8',
                20 => 'menu-common-admin-menu:menu-position/9',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_admin_menu',
          'version' => '7.x-1.3',
        ),
        'common_metatags' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_metatags/common_metatags.module',
          'basename' => 'common_metatags.module',
          'name' => 'common_metatags',
          'info' => 
          array (
            'name' => 'Common metatags',
            'description' => 'Common metatags',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_metatags',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'metatag' => 
              array (
                0 => 'global',
                1 => 'global:frontpage',
                2 => 'node',
                3 => 'node:article',
                4 => 'node:page',
                5 => 'taxonomy_term',
                6 => 'taxonomy_term:category',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_metatags',
          'version' => '7.x-1.0',
        ),
        'common_content_type_article' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_content_type_article/common_content_type_article.module',
          'basename' => 'common_content_type_article.module',
          'name' => 'common_content_type_article',
          'info' => 
          array (
            'name' => 'Common conten type article',
            'description' => 'Provides article content type',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_content_type_article',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entityreference',
              2 => 'features',
              3 => 'field_group',
              4 => 'field_sql_storage',
              5 => 'node',
              6 => 'strongarm',
              7 => 'text',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'field' => 
              array (
                0 => 'node-article-field_article_catchline',
                1 => 'node-article-field_article_main_media',
                2 => 'node-article-field_article_media',
                3 => 'node-article-field_blocks_zone1',
                4 => 'node-article-field_blocks_zone2',
                5 => 'node-article-field_body',
              ),
              'field_group' => 
              array (
                0 => 'group_blocks|node|article|form',
              ),
              'node' => 
              array (
                0 => 'article',
              ),
              'variable' => 
              array (
                0 => 'field_bundle_settings_node__article',
                1 => 'language_content_type_article',
                2 => 'menu_options_article',
                3 => 'menu_parent_article',
                4 => 'node_options_article',
                5 => 'node_preview_article',
                6 => 'node_submitted_article',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_content_type_article',
          'version' => '7.x-1.0',
        ),
        'common_menu_additional_header' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_menu_additional_header/common_menu_additional_header.module',
          'basename' => 'common_menu_additional_header.module',
          'name' => 'common_menu_additional_header',
          'info' => 
          array (
            'name' => 'Common Menu Additional header',
            'description' => 'Common Menu Additional header',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_menu_additional_header',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'menu',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:1',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_menu_additional_header',
          'version' => '7.x-1.0',
        ),
        'common_dashboard_product' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_dashboard_product/common_dashboard_product.module',
          'basename' => 'common_dashboard_product.module',
          'name' => 'common_dashboard_product',
          'info' => 
          array (
            'name' => 'Common Dashboard product',
            'description' => 'Provides dashboard page and views for products management.',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_dashboard_product',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'page_manager',
              2 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'page_manager_pages' => 
              array (
                0 => 'dashboard_product',
              ),
              'views_view' => 
              array (
                0 => 'dashboard_products',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_dashboard_product',
          'version' => '7.x-1.0',
        ),
        'common_menu_position_rules' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_menu_position_rules/common_menu_position_rules.module',
          'basename' => 'common_menu_position_rules.module',
          'name' => 'common_menu_position_rules',
          'info' => 
          array (
            'name' => 'Common menu position rules',
            'description' => 'Common menu position rules',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_menu_position_rules',
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'menu_position' => 
              array (
                0 => 'menu_position_rule:1',
                1 => 'menu_position_rule:2',
                2 => 'menu_position_rule:3',
                3 => 'menu_position_rule:4',
                4 => 'menu_position_rule:5',
                5 => 'menu_position_rule:6',
              ),
            ),
            'dependencies' => 
            array (
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_menu_position_rules',
          'version' => '7.x-1.0',
        ),
        'common_content_type_product' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_content_type_product/common_content_type_product.module',
          'basename' => 'common_content_type_product.module',
          'name' => 'common_content_type_product',
          'info' => 
          array (
            'name' => 'Common conten type product',
            'description' => 'Provides product content type',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_content_type_product',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entityreference',
              2 => 'features',
              3 => 'field_group',
              4 => 'field_sql_storage',
              5 => 'node',
              6 => 'strongarm',
              7 => 'text',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'field' => 
              array (
                0 => 'node-product-field_blocks_zone1',
                1 => 'node-product-field_blocks_zone2',
                2 => 'node-product-field_body',
                3 => 'node-product-field_product_catchline',
                4 => 'node-product-field_product_main_media',
                5 => 'node-product-field_product_media',
              ),
              'field_group' => 
              array (
                0 => 'group_blocks|node|product|form',
              ),
              'node' => 
              array (
                0 => 'product',
              ),
              'variable' => 
              array (
                0 => 'field_bundle_settings_node__product',
                1 => 'language_content_type_product',
                2 => 'menu_options_product',
                3 => 'menu_parent_product',
                4 => 'node_options_product',
                5 => 'node_preview_product',
                6 => 'node_submitted_product',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_content_type_product',
          'version' => '7.x-1.0',
        ),
        'common_input_formats' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/features/common/common_input_formats/common_input_formats.module',
          'basename' => 'common_input_formats.module',
          'name' => 'common_input_formats',
          'info' => 
          array (
            'name' => 'Common input formats',
            'description' => 'Provides input formats',
            'core' => '7.x',
            'package' => 'Common features',
            'php' => '5.2.4',
            'version' => '7.x-1.0',
            'project' => 'common_input_formats',
            'dependencies' => 
            array (
              0 => 'ckeditor',
              1 => 'features',
              2 => 'filter',
              3 => 'php',
            ),
            'features' => 
            array (
              'ckeditor_profile' => 
              array (
                0 => 'Advanced',
                1 => 'CKEditor Global Profile',
                2 => 'Full',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'filter' => 
              array (
                0 => 'filtered_html',
                1 => 'full_html',
                2 => 'php_code',
                3 => 'plain_text',
              ),
            ),
          ),
          'schema_version' => 0,
          'project' => 'common_input_formats',
          'version' => '7.x-1.0',
        ),
        'common_form_layouts' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/custom/common_form_layouts/common_form_layouts.module',
          'basename' => 'common_form_layouts.module',
          'name' => 'common_form_layouts',
          'info' => 
          array (
            'name' => 'common Form Layouts',
            'description' => 'Provides form customization specific for "common" website',
            'core' => '7.x',
            'package' => 'common',
            'dependencies' => 
            array (
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => '7300',
          'project' => '',
          'version' => NULL,
        ),
        'common' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/modules/custom/common/common.module',
          'basename' => 'common.module',
          'name' => 'common',
          'info' => 
          array (
            'name' => 'Common',
            'description' => 'Provides common site functionality.',
            'core' => '7.x',
            'package' => 'Common',
            'files' => 
            array (
              0 => 'views/common.views.inc',
              1 => 'views/handlers/common_views_handler_author_link_edit.inc',
              2 => 'views/handlers/common_views_handler_author_link_delete.inc',
              3 => 'views/handlers/common_views_handler_field_node_link_unpublish.inc',
              4 => 'views/handlers/common_views_handler_field_node_link_publish.inc',
              5 => 'views/handlers/common_views_handler_field_user_link_activate.inc',
              6 => 'views/handlers/common_views_handler_field_user_link_block.inc',
              7 => 'views/handlers/common_views_handler_field_ref_link_insert.inc',
              8 => 'views/handlers/common_views_handler_nodequeue_position_before_null.inc',
              9 => 'views/handlers/common_views_handler_field_term_link_delete.inc',
              10 => 'views/handlers/common_views_handler_field_bean_block_link_edit.inc',
              11 => 'views/handlers/common_views_handler_field_bean_block_link_delete.inc',
              12 => 'views/handlers/common_views_handler_field_asset_link_edit.inc',
              13 => 'views/handlers/common_views_handler_field_asset_link_delete.inc',
            ),
            'dependencies' => 
            array (
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
      ),
      'themes' => 
      array (
        'tao' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/themes/tao/tao.info',
          'basename' => 'tao.info',
          'name' => 'Tao',
          'info' => 
          array (
            'core' => '7.x',
            'description' => 'Tao is a base theme that is all about going with the flow. It takes care of key reset and utility tasks so that sub-themes can get on with their job.',
            'engine' => 'phptemplate',
            'name' => 'Tao',
            'regions' => 
            array (
              'sidebar_first' => 'Sidebar first',
              'sidebar_second' => 'Sidebar second',
              'content' => 'Content',
              'header' => 'Header',
              'help' => 'Help',
              'footer' => 'Footer',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
              'highlighted' => 'Highlighted',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'reset.css',
                1 => 'base.css',
              ),
              'screen' => 
              array (
                0 => 'drupal.css',
              ),
            ),
            'version' => '7.x-3.0-beta4',
            'project' => 'tao',
            'datestamp' => '1316616407',
          ),
          'project' => 'tao',
          'version' => '7.x-3.0-beta4',
        ),
        'twitter_bootstrap_panels' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/themes/twitter_bootstrap_panels_everywhere/twitter_bootstrap_panels.info',
          'basename' => 'twitter_bootstrap_panels.info',
          'name' => 'Twitter bootstrap panels',
          'info' => 
          array (
            'name' => 'Twitter bootstrap panels',
            'description' => 'Twitter bootstrap framework integration theme aimed to usage with panels/panels everywhere.',
            'version' => '7.x-1.x-dev',
            'core' => '7.x',
            'regions' => 
            array (
              'header' => 'Top Bar',
              'highlighted' => 'Highlighted',
              'help' => 'Help',
              'content' => 'Content',
              'sidebar_first' => 'Primary',
              'sidebar_second' => 'Secondary',
              'footer' => 'Footer',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'bootstrap/css/bootstrap.css',
                1 => 'bootstrap/css/bootstrap-responsive.css',
                2 => 'css/style.css',
                3 => 'bootstrap/css/bootstrap.css',
                4 => 'bootstrap/css/bootstrap-responsive.css',
                5 => 'css/style.css',
              ),
            ),
            'scripts' => 
            array (
              0 => 'bootstrap/js/bootstrap.js',
            ),
            'plugins' => 
            array (
              'panels' => 
              array (
                'layouts' => 'plugins/layouts',
                'styles' => 'plugins/styles',
              ),
            ),
            'api' => 
            array (
              'panels' => 
              array (
                'styles' => 
                array (
                  'version' => '2',
                ),
              ),
              'page_manager' => 
              array (
                'pages_default' => 
                array (
                  'version' => '1',
                  'path' => 'pages',
                ),
              ),
            ),
            'settings' => 
            array (
              'toggle_name' => '0',
              'toggle_search' => '1',
            ),
            'exclude' => 
            array (
              'css' => 
              array (
                0 => 'modules/aggregator/aggregator.css',
                1 => 'modules/block/block.css',
                2 => 'modules/book/book.css',
                3 => 'modules/comment/comment.css',
                4 => 'modules/dblog/dblog.css',
                5 => 'modules/file/file.css',
                6 => 'modules/filter/filter.css',
                7 => 'modules/forum/forum.css',
                8 => 'modules/help/help.css',
                9 => 'modules/menu/menu.css',
                10 => 'modules/node/node.css',
                11 => 'modules/openid/openid.css',
                12 => 'modules/poll/poll.css',
                13 => 'modules/search/search.css',
                14 => 'modules/statistics/statistics.css',
                15 => 'modules/syslog/syslog.css',
                16 => 'modules/system/maintenance.css',
                17 => 'modules/system/system.maintenance.css',
                18 => 'modules/system/system.menus.css',
                19 => 'modules/system/system.messages.css',
                20 => 'modules/system/system.theme.css',
                21 => 'modules/taxonomy/taxonomy.css',
                22 => 'modules/tracker/tracker.css',
                23 => 'modules/update/update.css',
                24 => 'modules/user/user.css',
              ),
            ),
            'project' => 'twitter_bootstrap_panels_everywhere',
            'datestamp' => '1355536591',
          ),
          'project' => 'twitter_bootstrap_panels_everywhere',
          'version' => '7.x-1.x-dev',
        ),
        'rubik' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/themes/rubik/rubik.info',
          'basename' => 'rubik.info',
          'name' => 'Rubik',
          'info' => 
          array (
            'name' => 'Rubik',
            'description' => 'Clean admin theme.',
            'base theme' => 'tao',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'regions' => 
            array (
              'content' => 'Content',
              'help' => 'Help',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
            ),
            'scripts' => 
            array (
              0 => 'js/rubik.js',
            ),
            'stylesheets' => 
            array (
              'screen' => 
              array (
                0 => 'core.css',
                1 => 'icons.css',
                2 => 'style.css',
              ),
              'print' => 
              array (
                0 => 'print.css',
              ),
            ),
            'settings' => 
            array (
              'shortcut_module_link' => '1',
            ),
            'version' => '7.x-4.0-beta8',
            'project' => 'rubik',
            'datestamp' => '1329953445',
          ),
          'project' => 'rubik',
          'version' => '7.x-4.0-beta8',
        ),
        'common_admin' => 
        array (
          'filename' => '/var/aegir/platforms/i20_platform/profiles/common_install/themes/common_admin/common_admin.info',
          'basename' => 'common_admin.info',
          'name' => 'common_admin',
          'info' => 
          array (
            'name' => 'common_admin',
            'description' => 'Admin theme derived from Rubik theme.',
            'base theme' => 'rubik',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'regions' => 
            array (
              'content' => 'Content',
              'help' => 'Help',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
            ),
            'stylesheets' => 
            array (
              'screen' => 
              array (
                0 => 'css/custom_admin.css',
                1 => 'css/styles.css',
              ),
            ),
            'scripts' => 
            array (
              0 => 'scripts/diaporama_modern.js',
              1 => 'scripts/fancybox.js',
              2 => 'scripts/form_settings.js',
              3 => 'scripts/jquery.slideshow.js',
              4 => 'scripts/jquery.main.js',
              5 => 'scripts/scripts.js',
              6 => 'scripts/custom_admin.js',
            ),
            'settings' => 
            array (
              'shortcut_module_link' => '1',
              'common_admin_menu_level_1' => 'common-menu-1',
              'common_admin_menu_level_2' => 'common-menu-2',
              'common_admin_menu_level_3' => 'common-menu-3',
            ),
            'version' => NULL,
          ),
          'project' => '',
          'version' => NULL,
        ),
      ),
    ),
  ),
);