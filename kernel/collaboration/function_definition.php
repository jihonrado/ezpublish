<?php
//
// Created on: <06-Oct-2002 16:01:10 amos>
//
// Copyright (C) 1999-2003 eZ systems as. All rights reserved.
//
// This source file is part of the eZ publish (tm) Open Source Content
// Management System.
//
// This file may be distributed and/or modified under the terms of the
// "GNU General Public License" version 2 as published by the Free
// Software Foundation and appearing in the file LICENSE.GPL included in
// the packaging of this file.
//
// Licencees holding valid "eZ publish professional licences" may use this
// file in accordance with the "eZ publish professional licence" Agreement
// provided with the Software.
//
// This file is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING
// THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
// PURPOSE.
//
// The "eZ publish professional licence" is available at
// http://ez.no/home/licences/professional/. For pricing of this licence
// please contact us via e-mail to licence@ez.no. Further contact
// information is available at http://ez.no/home/contact/.
//
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// Contact licence@ez.no if any conditions of this licencing isn't clear to
// you.
//

/*! \file function_definition.php
*/

$FunctionList = array();
$FunctionList['participant_list'] = array( 'name' => 'participant_list',
                                           'operation_types' => array( 'read' ),
                                           'call_method' => array( 'include_file' => 'kernel/collaboration/ezcollaborationfunctioncollection.php',
                                                                   'class' => 'eZCollaborationFunctionCollection',
                                                                   'method' => 'fetchParticipantList' ),
                                           'parameter_type' => 'standard',
                                           'parameters' => array( array( 'name' => 'item_id',
                                                                         'type' => 'array',
                                                                         'required' => false,
                                                                         'default' => false ),
                                                                  array( 'name' => 'sort_by',
                                                                         'type' => 'array',
                                                                         'required' => false,
                                                                         'default' => false ),
                                                                  array( 'name' => 'offset',
                                                                         'type' => 'integer',
                                                                         'required' => false,
                                                                         'default' => false ),
                                                                  array( 'name' => 'limit',
                                                                         'type' => 'integer',
                                                                         'required' => false,
                                                                         'default' => false ) ) );
$FunctionList['participant_map'] = array( 'name' => 'participant_map',
                                          'operation_types' => array( 'read' ),
                                          'call_method' => array( 'include_file' => 'kernel/collaboration/ezcollaborationfunctioncollection.php',
                                                                  'class' => 'eZCollaborationFunctionCollection',
                                                                  'method' => 'fetchParticipantMap' ),
                                           'parameter_type' => 'standard',
                                          'parameters' => array( array( 'name' => 'item_id',
                                                                        'type' => 'array',
                                                                        'required' => false,
                                                                        'default' => false ),
                                                                 array( 'name' => 'sort_by',
                                                                        'type' => 'array',
                                                                        'required' => false,
                                                                        'default' => false ),
                                                                 array( 'name' => 'offset',
                                                                        'type' => 'integer',
                                                                        'required' => false,
                                                                        'default' => false ),
                                                                 array( 'name' => 'limit',
                                                                        'type' => 'integer',
                                                                        'required' => false,
                                                                        'default' => false ),
                                                                 array( 'name' => 'field',
                                                                        'type' => 'integer',
                                                                        'required' => false,
                                                                        'default' => false ) ) );
$FunctionList['message_list'] = array( 'name' => 'message_list',
                                       'operation_types' => array( 'read' ),
                                       'call_method' => array( 'include_file' => 'kernel/collaboration/ezcollaborationfunctioncollection.php',
                                                               'class' => 'eZCollaborationFunctionCollection',
                                                               'method' => 'fetchMessageList' ),
                                       'parameter_type' => 'standard',
                                       'parameters' => array( array( 'name' => 'item_id',
                                                                     'type' => 'array',
                                                                     'required' => true,
                                                                     'default' => false ),
                                                              array( 'name' => 'sort_by',
                                                                     'type' => 'array',
                                                                     'required' => false,
                                                                     'default' => false ),
                                                              array( 'name' => 'offset',
                                                                     'type' => 'integer',
                                                                     'required' => false,
                                                                     'default' => false ),
                                                              array( 'name' => 'limit',
                                                                     'type' => 'integer',
                                                                     'required' => false,
                                                                     'default' => false ) ) );
$FunctionList['item_list'] = array( 'name' => 'item_list',
                                    'operation_types' => array( 'read' ),
                                    'call_method' => array( 'include_file' => 'kernel/collaboration/ezcollaborationfunctioncollection.php',
                                                            'class' => 'eZCollaborationFunctionCollection',
                                                            'method' => 'fetchItemList' ),
                                    'parameter_type' => 'standard',
                                    'parameters' => array( array( 'name' => 'sort_by',
                                                                  'type' => 'array',
                                                                  'required' => false,
                                                                  'default' => false ),
                                                           array( 'name' => 'offset',
                                                                  'type' => 'integer',
                                                                  'required' => false,
                                                                  'default' => false ),
                                                           array( 'name' => 'limit',
                                                                  'type' => 'integer',
                                                                  'required' => false,
                                                                  'default' => false ) ) );
$FunctionList['item_count'] = array( 'name' => 'item_count',
                                     'operation_types' => array( 'read' ),
                                     'call_method' => array( 'include_file' => 'kernel/collaboration/ezcollaborationfunctioncollection.php',
                                                             'class' => 'eZCollaborationFunctionCollection',
                                                             'method' => 'fetchItemCount' ),
                                     'parameter_type' => 'standard',
                                     'parameters' => array() );
$FunctionList['group_tree'] = array( 'name' => 'group_tree',
                               'operation_types' => array( 'read' ),
                               'call_method' => array( 'include_file' => 'kernel/collaboration/ezcollaborationfunctioncollection.php',
                                                       'class' => 'eZCollaborationFunctionCollection',
                                                       'method' => 'fetchGroupTree' ),
                               'parameter_type' => 'standard',
                               'parameters' => array( array( 'name' => 'parent_group_id',
                                                             'type' => 'integer',
                                                             'required' => true ),
                                                      array( 'name' => 'sort_by',
                                                             'type' => 'array',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'offset',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'limit',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ),
                                                      array( 'name' => 'depth',
                                                             'type' => 'integer',
                                                             'required' => false,
                                                             'default' => false ) ) );

$FunctionList['tree_count'] = array( 'name' => 'tree_count',
                                     'operation_types' => array( 'read' ),
                                     'call_method' => array( 'include_file' => 'kernel/content/ezcontentfunctioncollection.php',
                                                             'class' => 'eZContentFunctionCollection',
                                                             'method' => 'fetchObjectTreeCount' ),
                                     'parameter_type' => 'standard',
                                     'parameters' => array( array( 'name' => 'parent_node_id',
                                                                   'type' => 'integer',
                                                                   'required' => true ),
                                                            array( 'name' => 'class_filter_type',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'class_filter_array',
                                                                   'type' => 'array',
                                                                   'required' => false,
                                                                   'default' => false ),
                                                            array( 'name' => 'depth',
                                                                   'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => 0 ) ) );

?>
